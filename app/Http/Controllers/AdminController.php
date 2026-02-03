<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\QuoteRequest;
use App\Models\Service;
use App\Models\Setting;
use App\Models\TeamMember;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_projects' => Project::count(),
            'active_projects' => Project::where('status', true)->count(),
            'total_quotes' => QuoteRequest::count(),
            'pending_quotes' => QuoteRequest::where('status', 'pending')->count(),
            'urgent_quotes' => QuoteRequest::where('urgent', true)->count(),
        ];
        
        $recentQuotes = QuoteRequest::latest()->limit(5)->get();
        $featuredProjects = Project::featured()->limit(3)->get();
        
        return view('admin.dashboard', compact('stats', 'recentQuotes', 'featuredProjects'));
    }
    
    public function projects()
    {
        $projects = Project::ordered()->paginate(10);
        return view('admin.projects', compact('projects'));
    }
    
    public function createProject()
    {
        return view('admin.create-project');
    }
    
    public function storeProject(Request $request)
    {
        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'category' => 'required|in:tents,conferences,exhibitions,events',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'featured' => 'boolean',
            'sort_order' => 'integer|min:0',
            'status' => 'boolean',
        ]);
        
        $data = $request->except('image', 'gallery_images');
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/projects'), $imageName);
            $data['image'] = 'assets/images/projects/' . $imageName;
        }
        
        if ($request->hasFile('gallery_images')) {
            $galleryImages = [];
            foreach ($request->file('gallery_images') as $galleryImage) {
                $galleryImageName = time() . '_' . rand(1000, 9999) . '.' . $galleryImage->getClientOriginalExtension();
                $galleryImage->move(public_path('assets/images/projects/gallery'), $galleryImageName);
                $galleryImages[] = 'assets/images/projects/gallery/' . $galleryImageName;
            }
            $data['gallery_images'] = json_encode($galleryImages);
        }
        
        Project::create($data);
        
        return redirect()->route('admin.projects')->with('success', 'تم إضافة المشروع بنجاح');
    }
    
    public function editProject(Project $project)
    {
        return view('admin.edit-project', compact('project'));
    }
    
    public function updateProject(Request $request, Project $project)
    {
        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'category' => 'required|in:tents,conferences,exhibitions,events',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'featured' => 'boolean',
            'sort_order' => 'integer|min:0',
            'status' => 'boolean',
        ]);
        
        $data = $request->except('image', 'gallery_images');
        
        if ($request->hasFile('image')) {
            // Delete old image
            if ($project->image && file_exists(public_path($project->image))) {
                unlink(public_path($project->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/projects'), $imageName);
            $data['image'] = 'assets/images/projects/' . $imageName;
        }
        
        if ($request->hasFile('gallery_images')) {
            // Delete old gallery images
            if ($project->gallery_images) {
                foreach ($project->gallery_images as $oldImage) {
                    if (file_exists(public_path($oldImage))) {
                        unlink(public_path($oldImage));
                    }
                }
            }
            
            $galleryImages = [];
            foreach ($request->file('gallery_images') as $galleryImage) {
                $galleryImageName = time() . '_' . rand(1000, 9999) . '.' . $galleryImage->getClientOriginalExtension();
                $galleryImage->move(public_path('assets/images/projects/gallery'), $galleryImageName);
                $galleryImages[] = 'assets/images/projects/gallery/' . $galleryImageName;
            }
            $data['gallery_images'] = json_encode($galleryImages);
        }
        
        $project->update($data);
        
        return redirect()->route('admin.projects')->with('success', 'تم تحديث المشروع بنجاح');
    }
    
    public function deleteProject(Project $project)
    {
        // Delete images
        if ($project->image && file_exists(public_path($project->image))) {
            unlink(public_path($project->image));
        }
        
        if ($project->gallery_images) {
            foreach ($project->gallery_images as $image) {
                if (file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }
        
        $project->delete();
        
        return redirect()->route('admin.projects')->with('success', 'تم حذف المشروع بنجاح');
    }
    
    public function quotes()
    {
        $quotes = QuoteRequest::latest()->paginate(10);
        return view('admin.quotes', compact('quotes'));
    }
    
    public function showQuote(QuoteRequest $quote)
    {
        return view('admin.show-quote', compact('quote'));
    }
    
    public function updateQuoteStatus(Request $request, QuoteRequest $quote)
    {
        $request->validate([
            'status' => 'required|in:pending,reviewed,replied',
        ]);
        
        $quote->update(['status' => $request->status]);
        
        return redirect()->back()->with('success', 'تم تحديث حالة الطلب بنجاح');
    }
    
    // Services Management
    public function services()
    {
        $services = Service::ordered()->paginate(10);
        return view('admin.services', compact('services'));
    }
    
    public function createService()
    {
        return view('admin.create-service');
    }
    
    public function storeService(Request $request)
    {
        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'slug' => 'required|string|unique:services',
            'icon' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'features_ar' => 'required|array',
            'features_en' => 'required|array',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'featured' => 'boolean',
            'sort_order' => 'integer|min:0',
            'status' => 'boolean',
        ]);
        
        $data = $request->except('image', 'gallery_images');
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/services'), $imageName);
            $data['image'] = 'assets/images/services/' . $imageName;
        }
        
        if ($request->hasFile('gallery_images')) {
            $galleryImages = [];
            foreach ($request->file('gallery_images') as $galleryImage) {
                $galleryImageName = time() . '_' . rand(1000, 9999) . '.' . $galleryImage->getClientOriginalExtension();
                $galleryImage->move(public_path('assets/images/services/gallery'), $galleryImageName);
                $galleryImages[] = 'assets/images/services/gallery/' . $galleryImageName;
            }
            $data['gallery_images'] = json_encode($galleryImages);
        }
        
        Service::create($data);
        
        return redirect()->route('admin.services')->with('success', 'تم إضافة الخدمة بنجاح');
    }
    
    public function editService(Service $service)
    {
        return view('admin.edit-service', compact('service'));
    }
    
    public function updateService(Request $request, Service $service)
    {
        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'slug' => 'required|string|unique:services,slug,' . $service->id,
            'icon' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'features_ar' => 'required|array',
            'features_en' => 'required|array',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'featured' => 'boolean',
            'sort_order' => 'integer|min:0',
            'status' => 'boolean',
        ]);
        
        $data = $request->except('image', 'gallery_images');
        
        if ($request->hasFile('image')) {
            if ($service->image && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/services'), $imageName);
            $data['image'] = 'assets/images/services/' . $imageName;
        }
        
        if ($request->hasFile('gallery_images')) {
            if ($service->gallery_images) {
                foreach ($service->gallery_images as $oldImage) {
                    if (file_exists(public_path($oldImage))) {
                        unlink(public_path($oldImage));
                    }
                }
            }
            
            $galleryImages = [];
            foreach ($request->file('gallery_images') as $galleryImage) {
                $galleryImageName = time() . '_' . rand(1000, 9999) . '.' . $galleryImage->getClientOriginalExtension();
                $galleryImage->move(public_path('assets/images/services/gallery'), $galleryImageName);
                $galleryImages[] = 'assets/images/services/gallery/' . $galleryImageName;
            }
            $data['gallery_images'] = json_encode($galleryImages);
        }
        
        $service->update($data);
        
        return redirect()->route('admin.services')->with('success', 'تم تحديث الخدمة بنجاح');
    }
    
    public function deleteService(Service $service)
    {
        if ($service->image && file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }
        
        if ($service->gallery_images) {
            foreach ($service->gallery_images as $image) {
                if (file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }
        
        $service->delete();
        
        return redirect()->route('admin.services')->with('success', 'تم حذف الخدمة بنجاح');
    }
    
    // Settings Management
    public function settings()
    {
        $generalSettings = Setting::byGroup('general')->get();
        $contactSettings = Setting::byGroup('contact')->get();
        $socialSettings = Setting::byGroup('social')->get();
        $seoSettings = Setting::byGroup('seo')->get();
        
        return view('admin.settings', compact('generalSettings', 'contactSettings', 'socialSettings', 'seoSettings'));
    }
    
    public function updateSettings(Request $request)
    {
        $settings = $request->except(['_token', '_method']);
        
        foreach ($settings as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            if ($setting) {
                $setting->update(['value' => $value]);
            }
        }
        
        return redirect()->back()->with('success', 'تم تحديث الإعدادات بنجاح');
    }
    
    // Team Members Management
    public function teamMembers()
    {
        $teamMembers = TeamMember::ordered()->paginate(10);
        return view('admin.team-members', compact('teamMembers'));
    }
    
    public function createTeamMember()
    {
        return view('admin.create-team-member');
    }
    
    public function storeTeamMember(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'position_ar' => 'required|string|max:255',
            'position_en' => 'required|string|max:255',
            'bio_ar' => 'nullable|string',
            'bio_en' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'social_links' => 'nullable|array',
            'featured' => 'boolean',
            'sort_order' => 'integer|min:0',
            'status' => 'boolean',
        ]);
        
        $data = $request->except('image');
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/team'), $imageName);
            $data['image'] = 'assets/images/team/' . $imageName;
        }
        
        TeamMember::create($data);
        
        return redirect()->route('admin.team-members')->with('success', 'تم إضافة عضو الفريق بنجاح');
    }
    
    public function editTeamMember(TeamMember $teamMember)
    {
        return view('admin.edit-team-member', compact('teamMember'));
    }
    
    public function updateTeamMember(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'position_ar' => 'required|string|max:255',
            'position_en' => 'required|string|max:255',
            'bio_ar' => 'nullable|string',
            'bio_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'social_links' => 'nullable|array',
            'featured' => 'boolean',
            'sort_order' => 'integer|min:0',
            'status' => 'boolean',
        ]);
        
        $data = $request->except('image');
        
        if ($request->hasFile('image')) {
            if ($teamMember->image && file_exists(public_path($teamMember->image))) {
                unlink(public_path($teamMember->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/team'), $imageName);
            $data['image'] = 'assets/images/team/' . $imageName;
        }
        
        $teamMember->update($data);
        
        return redirect()->route('admin.team-members')->with('success', 'تم تحديث عضو الفريق بنجاح');
    }
    
    public function deleteTeamMember(TeamMember $teamMember)
    {
        if ($teamMember->image && file_exists(public_path($teamMember->image))) {
            unlink(public_path($teamMember->image));
        }
        
        $teamMember->delete();
        
        return redirect()->route('admin.team-members')->with('success', 'تم حذف عضو الفريق بنجاح');
    }
}
