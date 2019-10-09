<?php

namespace App\Http\Controllers;

use App\Models\Alumnu;
use App\Models\AlumnusCate;
use App\Models\Course;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    //
    public function __construct()
    {
        $courses_list = Course::query()->get();
        $alumnus_cate_list = AlumnusCate::pluck('name', 'id')->toArray();
        $settings = Setting::take(1)->get();
        $footer_news = Alumnu::orderBy('created_at', 'desc')->take(2)->get();

        $pages = Page::query()->orderBy('order', 'asc')->get()->toArray();
        $pages = list_to_tree($pages);

        view()->share(compact('courses_list', 'alumnus_cate_list', 'settings', 'footer_news', 'pages'));
    }
}
