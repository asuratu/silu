<?php

namespace App\Admin\Controllers;

use App\Models\Advantage;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AdvantagesController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('核心优势');
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

            $content->header('核心优势');

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

            $content->header('核心优势');

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
        return Admin::grid(Advantage::class, function (Grid $grid) {
            $grid->model()->orderBy('id', 'desc');
            $grid->id('ID')->sortable();

            $grid->img('图片')->image('', 100, 100);
            $grid->title('标题')->editable();
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
        return Admin::form(Advantage::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->image('img', '图片')->rules('required');
            $form->text('title', '标题')->rules('required');
            $form->textarea('body', '内容')->rules('required');
            $form->number('sort', '排序');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '修改时间');
        });
    }
}
