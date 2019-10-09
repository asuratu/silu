<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends CommonController
{
    public function show(Page $page)
    {
        // 获取父级菜单信息
        $parent_pages = $page->parent_pages;

        // 获取子级菜单信息
        $child_pages = $page->child_pages;

        if (!$parent_pages && !$child_pages->isEmpty()){

            return redirect()->route('pages.show', [$child_pages[0]->id]);

        }

        return view('home.pages.show', compact('page', 'parent_pages'));
    }
}
