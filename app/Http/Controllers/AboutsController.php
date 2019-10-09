<?php

namespace App\Http\Controllers;

use App\Models\Founder;
use App\Models\NavBanner;
use App\Models\School;
use App\Models\Seo;
use Illuminate\Http\Request;

class AboutsController extends CommonController
{
    //
    public function index()
    {
        $banner = NavBanner::where('cate_id', 1)->take(1)->get();
        $founders = Founder::orderBy('sort', 'asc')->get();
        $schools = School::orderBy('sort', 'asc')->get();
        $seos = Seo::where('cate_id', 2)->take(1)->get();

        return view('home.abouts.index', compact('seos','banner', 'founders', 'schools'));
    }
}
