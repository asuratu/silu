<?php

namespace App\Http\Controllers;

use App\Models\NavBanner;
use App\Models\Seo;
use Illuminate\Http\Request;

class ContactsController extends CommonController
{
    public function index()
    {
        $banner = NavBanner::where('cate_id', 6)->take(1)->get();
        $seos = Seo::where('cate_id', 7)->take(1)->get();

        return view('home.contacts.index', compact('seos', 'banner'));
    }
}
