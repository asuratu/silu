<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Course;
use App\Models\CoursesAttr;
use App\Models\CoursesCate;
use App\Models\NavBanner;
use App\Models\Seo;
use Illuminate\Http\Request;

class CoursesController extends CommonController
{
    //
    public function index()
    {
        $banner = NavBanner::where('cate_id', 2)->take(1)->get();
        $advantages = Advantage::orderBy('sort', 'asc')->get();
        $courses = Course::all();
        $seos = Seo::where('cate_id', 3)->take(1)->get();

        return view('home.courses.index', compact('seos','banner', 'advantages', 'courses'));
    }

    public function show(Course $course)
    {
        $banner = NavBanner::where('cate_id', 2)->take(1)->get();
        $seos = Seo::where('cate_id', 3)->take(1)->get();

        if ($course->status == 0){
            return redirect()->route('courses');
        }

        return view('home.courses.show', compact('seos','banner', 'course'));
    }
}
