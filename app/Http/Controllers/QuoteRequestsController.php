<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\QuoteRequest;
use Illuminate\Http\Request;

class QuoteRequestsController extends Controller
{
    public function create()
    {
        $services = Service::orderBy('sort_order')->get();

        return view('quote', compact('services'));
    }

    public function index()
    {
        $requests = QuoteRequest::orderBy('created_at', 'desc')->paginate(20);

        return view('admin.quote_requests.index', compact('requests'));
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'service_type' => 'required|string|exists:services,slug',
                'event_type' => 'required|string|max:255',
                'expected_attendees' => 'required|integer|min:1',
                'event_date' => 'required|date',
                'event_duration' => 'required|string|max:255',
                'event_location' => 'required|string|max:255',
                'required_space' => 'required|integer|min:1',
                'space_type' => 'required|string|max:255',
                'budget_range' => 'nullable|string|max:255',
                'special_requirements' => 'nullable|string|max:5000',
                'full_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:50',
                'company' => 'nullable|string|max:255',
                'attachments' => 'nullable|array',
                'attachments.*' => 'file|max:10240|mimes:pdf,doc,docx,jpg,jpeg,png',
                'terms' => 'required',
            ]);

            unset($validated['terms']);

            $attachmentPaths = [];
            if ($request->hasFile('attachments')) {
                foreach ($request->file('attachments') as $file) {
                    $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('assets/files/quote_requests'), $fileName);
                    $attachmentPaths[] = 'assets/files/quote_requests/' . $fileName;
                }
            }

            if (!empty($attachmentPaths)) {
                $validated['attachments'] = json_encode($attachmentPaths);
            } else {
                unset($validated['attachments']);
            }

            QuoteRequest::create($validated);

            return response()->json([
                'success' => true,
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->validator->errors()->first(),
                'errors' => $e->errors(),
            ], 422);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'حدث خطأ أثناء إرسال الطلب',
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        $quoteRequest = QuoteRequest::findOrFail($id);
        $quoteRequest->delete();

        return redirect()->route('admin-quote-requests.index')->with('delete', 'تم حذف الطلب بنجاح');
    }

    public function toggle(string $id)
    {
        $quoteRequest = QuoteRequest::findOrFail($id);
        $newStatus = $quoteRequest->status === 'pending' ? 'completed' : 'pending';
        $quoteRequest->update([
            'status' => $newStatus,
        ]);

        $message = $newStatus === 'completed' ? 'تم تغيير حالة الطلب إلى مكتمل' : 'تم إرجاع الطلب إلى قيد الانتظار';
        return redirect()->route('admin-quote-requests.index')->with('success', $message);
    }
}
