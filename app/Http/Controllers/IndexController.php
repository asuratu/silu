<?php

namespace App\Http\Controllers;

use App\Models\Alumnu;
use App\Models\Banner;
use App\Models\Course;
use App\Models\CoursesCate;
use App\Models\Founder;
use App\Models\Seo;
use Illuminate\Http\Request;

class IndexController extends CommonController
{
    //
    public function index()
    {
        $banners = Banner::orderBy('sort', 'asc')->get();

        $alumnus_list = Alumnu::orderBy('created_at', 'desc')->paginate(3);

        if(isset($alumnus_list)) {
            foreach ($alumnus_list as $key=>$value) {
                $alumnus_list[$key]['created_time'] = date("Y-m-d", strtotime($value['created_at']));
            }
        }

        $founders = Founder::orderBy('sort', 'asc')->take(2)->get();
        $courses_cates = CoursesCate::all();

        $seos = Seo::where('cate_id', 1)->take(1)->get();

        $column1 = Alumnu::query()->where(['cate_id'=>3, 'recommend'=>1])->orderBy('sort', 'asc')->limit(3)->get();
        $column2 = Course::query()->where(['recommend'=>1])->orderBy('sort', 'asc')->limit(3)->get();
        $column3 = Alumnu::query()->where(['cate_id'=>2, 'recommend'=>1])->orderBy('sort', 'asc')->limit(8)->get();
        $column4 = Alumnu::query()->where(['cate_id'=>1, 'recommend'=>1])->orderBy('sort', 'asc')->limit(4)->get();

        return view('home.index.index', compact('alumnus_list','seos', 'banners', 'founders', 'courses_cates', 'column4', 'column3', 'column2', 'column1'));
    }
}
