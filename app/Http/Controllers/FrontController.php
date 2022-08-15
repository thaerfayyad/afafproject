<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Job;
use App\Models\News;
use App\Models\publicAssociation;
use App\Models\Team;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class FrontController extends Controller
{
    //
    public function index()
    {
        $news = News::all();
        $teams = Team::all();
        $courses = Courses::all();
        return response()->view('front.index',compact('news', 'teams', 'courses'));
    }
    public function publicAssociations ()
    {
        $items = publicAssociation::all();
        return response()->view('front.general_assembly.general_assembly',compact('items'));
    }
    public function jobs ()
    {
        $items = Job::all();
        return response()->view('front.jobs.jobs',compact('items'));
    }
    
}
