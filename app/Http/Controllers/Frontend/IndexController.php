<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\CompanyInfo;
use App\Models\Menu;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $sliders = Slider::latest()->get();
        $members = Team::latest()->get();
        $projects = Project::with('projectCategory')->latest()->limit(4)->get();
        $testimonials = Testimonial::with('client')->latest()->get();
        $companyInfo = CompanyInfo::latest()->first();
        $services = Service::latest()->get();
        return view('frontend.index', compact('menus', 'sliders', 'members','projects', 'testimonials', 'companyInfo', 'services'));
    }
    public function projects()
    {
        $companyInfo = CompanyInfo::latest()->first();
        $projects = Project::with('projectCategory')->latest()->get();
        return view('frontend.pages.projects.all_projects', compact('projects', 'companyInfo'));
    }
    public function project_single_page($id)
    {
        $companyInfo = CompanyInfo::latest()->first();
        $project = Project::with('projectCategory')->findOrFail($id);
        return view('frontend.pages.projects.project-details', compact('project', 'companyInfo'));
    }
    public function pricing()
    {
        $companyInfo = CompanyInfo::latest()->first();
        return view('frontend.pages.price.price', compact('companyInfo'));
    }
    public function contact()
    {
        $companyInfo = CompanyInfo::latest()->first();
        return view('frontend.pages.contact.contact', compact('companyInfo'));
    }
    public function our_team()
    {
        $companyInfo = CompanyInfo::latest()->first();
        $members = Team::all();
        return view('frontend.pages.our_team.our_team', compact('companyInfo', 'members'));
    }
}
