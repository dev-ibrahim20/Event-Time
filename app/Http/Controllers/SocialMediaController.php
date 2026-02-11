<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialMedia = SocialMedia::orderBy('sort_order')->get();
        return view('admin.social_media.index', compact('socialMedia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.social_media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'icon' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
        ]);

        SocialMedia::create($request->all());
        return redirect()->route('admin-social-media.index')->with('success', 'تم إضافة وسيلة التواصل الاجتماعي بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialMedia $socialMedia)
    {
        return view('admin.social_media.edit', compact('socialMedia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SocialMedia $socialMedia)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'icon' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
        ]);

        $socialMedia->update($request->all());
        return redirect()->route('admin-social-media.index')->with('success', 'تم تحديث وسيلة التواصل الاجتماعي بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialMedia $socialMedia)
    {
        $socialMedia->delete();
        return redirect()->route('admin-social-media.index')->with('delete', 'تم حذف وسيلة التواصل الاجتماعي بنجاح');
    }
}
