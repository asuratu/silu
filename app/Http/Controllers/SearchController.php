<?php

namespace App\Http\Controllers;

use App\Models\Alumnu;
use App\Models\Course;
use App\Models\Page;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchController extends CommonController
{
    public function index(Request $request)
    {
        $keywords = trim($request->input('keywords'));

        if (!$keywords) {
            $data = [];

            return view('home.search.index', compact('data', 'keywords'));
        }

        $list1 = Page::query()
            ->orWhere('title', 'like', "%$keywords%")
            ->orWhere('body', 'like', "%$keywords%")
            ->get()
            ->reject(function ($value, $key) {
                    $value['url'] = route('pages.show', [$value['id']]);
                    $value['url_content'] = $value['title'];
                    $value['url_intro'] = htmlFilterAndLimit($value['body'], 200);
                })->toArray();

        $list2 = Course::query()
            ->orWhere('name', 'like', "%$keywords%")
            ->orWhere('intro', 'like', "%$keywords%")
            ->orWhere('body', 'like', "%$keywords%")
            ->get()
            ->reject(function ($value, $key) {
                $value['url'] = route('courses.show', [$value['id']]);
                $value['url_content'] = $value['name'];
                $value['url_intro'] = htmlFilterAndLimit($value['intro'], 200);
            })->toArray();

        $list3 = Teacher::query()
            ->orWhere('name', 'like', "%$keywords%")
            ->orWhere('introduction', 'like', "%$keywords%")
            ->get()
            ->reject(function ($value, $key) {
                $value['url'] = route('teachers');
                $value['url_content'] = $value['name'];
                $value['url_intro'] = htmlFilterAndLimit($value['introduction'], 200);
            })->toArray();

        $list4 = Alumnu::query()
            ->orWhere('title', 'like', "%$keywords%")
            ->orWhere('description', 'like', "%$keywords%")
            ->orWhere('body', 'like', "%$keywords%")
            ->get()
            ->reject(function ($value, $key) {
                $value['url'] = route('alumnus.show', [$value['id']]);
                $value['url_content'] = $value['title'];
                $value['url_intro'] = htmlFilterAndLimit($value['body'], 200);
            })->toArray();

        $data = array_merge($list1, $list2, $list3, $list4);
        $count = count($data);
        //当前页数 默认1
        $page = $request->page ?: 1;
        //每页的条数
        $perPage = 10;
        //计算每页分页的初始位置
        $offset = ($page * $perPage) - $perPage;
        //实例化LengthAwarePaginator类，并传入对应的参数
        $data = new LengthAwarePaginator(array_slice($data, $offset, $perPage, true), count($data), $perPage,
            $page, ['path' => $request->url(), 'query' => $request->query()]);

        return view('home.search.index', compact('data', 'keywords', 'count'));
    }
}
