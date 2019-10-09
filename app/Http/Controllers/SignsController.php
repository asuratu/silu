<?php

namespace App\Http\Controllers;

use App\Handlers\UploadHandler;
use App\Http\Requests\SignRequest;
use App\Models\Course;
use App\Models\NavBanner;
use App\Models\Seo;
use App\Models\Sign;
use Illuminate\Http\Request;

class SignsController extends CommonController
{
    public function index()
    {
        $banner = NavBanner::where('cate_id', 4)->take(1)->get();
        $courses = Course::all();
        $seos = Seo::where('cate_id', 5)->take(1)->get();

        return view('home.signs.index', compact('seos','banner', 'courses'));
    }

    public function store(SignRequest $request, UploadHandler $uploader)
    {
        $data = $request->only(['name', 'main_position', 'phone', 'unit', 'course_id']);

        // foreach ($request->file() as $key=>$val){
        //     if ($request->$key){
        //         $result[$key] = $uploader->save($request->$key);
        //         if ($result){
        //             $data[$key] = $result[$key]['path'];
        //         }
        //     }
        // }

        Sign::create($data);

        return redirect()->route('signs')->with('message', '报名信息发送成功！');
    }

    public function fileUpload(Request $request, UploadHandler $uploader)
    {
        if ($request->file()){
            foreach ($request->file() as $key=>$val){
                $result[$key] = $uploader->save($request->$key);
                $path = $result[$key]['path'];

                return response()->json([
                    'code' => 1,
                    'msg'  => '上传成功',
                    'data' => [
                        'src' => '/uploads/'.$path,
                    ],
                ]);
            }
        }

        return response()->json([
            'code' => 0,
            'msg'  => '上传失败',
            'data' => [
                'src' => '',
            ],
        ]);

    }
}
