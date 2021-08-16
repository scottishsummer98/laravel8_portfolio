<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Project;

class PagesController extends Controller
{
    public function index() {
        $about = About::first();
        $experience = Experience::all();
        $education = Education::all();
        $project = Project::all();
        return view('pages.index', compact('about','experience','education','project'));
    }
    public function dashboard() {
        return view('pages.dashboard');
    }
}
