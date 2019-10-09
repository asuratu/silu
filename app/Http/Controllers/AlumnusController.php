<?php

namespace App\Http\Controllers;

use App\Models\Alumnu;
use App\Models\AlumnusCate;
use App\Models\NavBanner;
use App\Models\Seo;
use Illuminate\Http\Request;

class AlumnusController extends CommonController
{
    public function index()
    {
        $banner = NavBanner::where('cate_id', 5)->take(1)->get();
        $alumnus_cates = AlumnusCate::pluck('name', 'id')->toArray();
        if (in_array(@(int)$_GET['cate'], array_keys($alumnus_cates))){
            $cate_id = (int)$_GET['cate'];
        }else{
            return redirect()->route('alumnus', ['cate'=>1]);
        }
        $alumnus_list = Alumnu::where('cate_id', $cate_id)->orderBy('created_at', 'desc')->paginate(6);

        if(isset($alumnus_list)) {
            foreach ($alumnus_list as $key=>$value) {
                $alumnus_list[$key]['created_time'] = date("Y-m-d", strtotime($value['created_at']));
            }
        }


        //return $alumnus_list;
        $years = [
                '1' => '一',
                '2' => '二',
                '3' => '三',
                '4' => '四',
                '5' => '五',
                '6' => '六',
                '7' => '七',
                '8' => '八',
                '9' => '九',
                '10' => '十',
                '11' => '十一',
                '12' => '十二',
            ];
        $seos = Seo::where('cate_id', 6)->take(1)->get();

        return view('home.alumnus.index', compact('seos', 'banner', 'alumnus_cates', 'alumnus_list', 'years'));
    }

    public function show(Alumnu $alumnu)
    {
        $banner = NavBanner::where('cate_id', 5)->take(1)->get();
        $prev_page = Alumnu::where('cate_id', $alumnu->cate_id)->where('id', '>', $alumnu->id)->orderBy('id', 'asc')->take(1)->get();
        $next_page = Alumnu::where('cate_id', $alumnu->cate_id)->where('id', '<', $alumnu->id)->orderBy('id', 'desc')->take(1)->get();
        $alumnus_cates = AlumnusCate::pluck('name', 'id')->toArray();
        $seos = Seo::where('cate_id', 6)->take(1)->get();

        return view('home.alumnus.show', compact('seos', 'banner', 'alumnus_cates', 'alumnu', 'prev_page', 'next_page'));
    }
}
