<?php

namespace App\Admin\Controllers;

use App\Models\Teacher;

use App\Models\TeachersCate;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class TeachersController extends Controller
{
    use ModelForm;

    protected $cates;

    public function __construct()
    {
        $this->cates = TeachersCate::pluck('name', 'id')->toArray();
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('师资资源');
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

            $content->header('师资资源');

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

            $content->header('师资资源');

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
        return Admin::grid(Teacher::class, function (Grid $grid) {
            $grid->model()->orderBy('id', 'desc');
            $grid->id('ID')->sortable();

            $grid->cate_id('分类名称')->select($this->cates);
            $grid->name('姓名')->editable();
            $grid->img('图片')->image('', 100, 100);
            $grid->sort('排序')->editable();

            $grid->created_at('创建时间');
            $grid->updated_at('修改时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Teacher::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->select('cate_id', '分类名称')->options($this->cates)->rules('required');
            $form->text('name', '姓名')->rules('required');
            $form->image('img', '图片')->rules('required')->uniqueName();
            $form->textarea('introduction', '简介')->rules('required');
            $form->number('sort', '排序');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '修改时间');
        });
    }
}
