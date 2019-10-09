<?php

namespace App\Admin\Controllers;

use App\Models\Course;
use App\Models\Sign;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SignsController extends Controller
{
    use ModelForm;

    protected $courses;

    public function __construct()
    {
        $this->courses = Course::pluck('name', 'id')->toArray();
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('在线报名');
            $content->description('列表');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('在线报名');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('在线报名');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Sign::class, function (Grid $grid) {
            $courses = $this->courses;
            $grid->model()->orderBy('id', 'desc');
            $grid->id('ID')->sortable();
            $grid->course_id('报名课程')->display(function ($course_id) use ($courses){
                return $courses[$course_id];
            });
            $grid->name('姓名');
            $grid->unit('单位');
            $grid->phone('联系电话');
            $grid->email('电子邮箱');
            $grid->img('证件照')->image('', 100, 100);


            $grid->created_at('提交时间');
            $grid->disableCreateButton();
            $grid->actions(function ($actions) {
                $actions->disableDelete();
            });
            $grid->tools(function ($tools) {
                // 禁用批量删除按钮
                $tools->batch(function ($batch) {
                    $batch->disableDelete();
                });
            });
            $grid->filter(function($filter){
                // 在这里添加字段过滤器
                $filter->like('name', '姓名');
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Sign::class, function (Form $form) {
            $courses = $this->courses;
            $form->display('id', 'ID');
            $form->display('course_id', '报名课程')->with(function ($value) use ($courses){
                return $courses[$value];
            });;
            $form->display('name', '姓名');
            $form->display('sex', '性别');
            $form->display('img', '证件照')->with(function ($value){
                $url = config('app.url').'/uploads/'.$value;
                return "<img src='$url'>";
            });;
            $form->display('birthplace', '籍贯');
            $form->display('ethnic', '民族');
            $form->display('unit', '单位');
            $form->display('main_position', '主要职务');
            $form->display('id_card', '身份证/护照号');
            $form->display('address', '通讯地址');
            $form->display('phone', '联系电话');
            $form->display('email', '电子邮箱');
            $form->display('introduction', '个人简介');
            $form->display('company_intro', '公司介绍');
            $form->display('file1', '最高学历毕业证书复印件')->with(function ($value) {
                $url = '/uploads/' . $value;
                return "<a target='_blank' href='$url'>最高学历毕业证书复印件</a>";
            });
            $form->display('file2', '个人荣誉证书复印件')->with(function ($value) {
                $url = '/uploads/' . $value;
                return "<a target='_blank' href='$url'>个人荣誉证书复印件</a>";
            });
            $form->display('file3', '报名表')->with(function ($value) {
                $url = '/uploads/' . $value;
                return "<a target='_blank' href='$url'>报名表</a>";
            });
            $form->display('file4', '推荐信')->with(function ($value) {
                $url = '/uploads/' . $value;
                return "<a target='_blank' href='$url'>推荐信</a>";
            });
            $form->display('file5', '身份证复印件')->with(function ($value) {
                $url = '/uploads/' . $value;
                return "<a target='_blank' href='$url'>身份证复印件</a>";
            });

            $form->disableReset();
            $form->disableSubmit();
            $form->display('created_at', '提交时间');
        });
    }
}
