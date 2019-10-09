<?php

namespace App\Http\Controllers;

use App\Models\NavBanner;
use App\Models\Seo;
use App\Models\Teacher;
use App\Models\TeachersCate;
use Illuminate\Http\Request;

class TeachersController extends CommonController
{
    //
    public function index()
    {
        $banner = NavBanner::where('cate_id', 3)->take(1)->get();

        $teachers_cates = TeachersCate::orderBy('sort', 'asc')->get();

        $teachers = Teacher::orderBy('sort', 'asc')->get();

        $seos = Seo::where('cate_id', 4)->take(1)->get();

        return view('home.teachers.index', compact('seos','banner', 'teachers_cates', 'teachers'));
    }
}
