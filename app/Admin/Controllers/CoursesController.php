<?php

namespace App\Admin\Controllers;

use App\Models\Course;

use App\Models\CoursesCate;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CoursesController extends Controller
{
    use ModelForm;

    protected $cates;

    public function __construct()
    {
        $this->cates = CoursesCate::pluck('name', 'id')->toArray();
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('课程');
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

            $content->header('课程');

            $content->body($this->form($id)->edit($id));
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

            $content->header('课程');

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
        return Admin::grid(Course::class, function (Grid $grid) {
            $cates = $this->cates;
            $grid->model()->orderBy('id', 'desc');
            $grid->id('ID')->sortable();

//            $grid->cate_id('课程分类')->display(function ($cate_id) use($cates) {
//                return @$cates[$cate_id];
//            });
            $grid->name('课程名称')->editable();
            $grid->status('显示')->switch();
            $grid->recommend('是否推荐')->switch();
            $grid->sort('推荐排序')->editable();

            $grid->created_at('创建时间');
            $grid->updated_at('修改时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form($id = null)
    {
        return Admin::form(Course::class, function (Form $form) use ($id) {

            $form->display('id', 'ID');

            $form->tab('基本信息', function ($form) use ($id){
//            $form->select('cate_id', '课程分类')->options($this->cates)->rules('required');
                $form->text('name', '课程名称')->rules('required');
                $form->text('intro', '简介')->rules('required');
                $form->image('img', '图片')->rules('required')->uniqueName();
//            $form->text('start_time', '开学时间')->rules('required');
//            $form->text('edu_system', '学制')->rules('required');
//            $form->text('sign_way', '报名方式')->rules('required');
//            $form->textarea('sign_cond', '报名条件')->rules('required');
//            $form->textarea('advisory', '咨询服务')->rules('required');
//            $form->textarea('welfare', '福利')->rules('required');
                $form->ueditor('body', '内容');
                $form->file('sign_table', '报名表')->uniqueName();
                $form->file('letter', '推荐信')->uniqueName();
                if ($id){
                    $form->display('sign_table', '报名表')->with(function ($value) {
                        if ($value){
                            $url = '/uploads/' . $value;
                            return "<a target='_blank' href='$url'>报名表</a>";
                        }
                    });
                    $form->display('letter', '推荐信')->with(function ($value) {
                        if ($value) {
                            $url = '/uploads/' . $value;
                            return "<a target='_blank' href='$url'>推荐信</a>";
                        }
                    });
                }
                $form->switch('status', '显示');
//            $form->hasMany('courses_attrs', '课程设置', function ($form){
//                $form->text('title', '课程模块');
//                $form->text('body', '课程内容');
//            });
            })->tab('其他', function ($form){
                $form->switch('recommend', '是否推荐');
                $form->number('sort', '推荐排序');
                $form->image('recommend_img', '推荐图片')->help('可选填（推荐到首页时展示）')->removable()->uniqueName();
            });





            $form->display('created_at', '创建时间');
            $form->display('updated_at', '修改时间');
        });
    }
}
