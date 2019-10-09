<?php

namespace App\Admin\Controllers;

use App\Models\Board;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class BoardsController extends Controller
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

            $content->header('留言');
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

            $content->header('留言');

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

            $content->header('留言');

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
        return Admin::grid(Board::class, function (Grid $grid) {
            $grid->model()->orderBy('id', 'desc');
            $grid->id('ID')->sortable();

            $grid->name('姓名');
            $grid->email('邮箱');
            $grid->phone('电话');
            $grid->address('地址');
            $grid->body('留言');

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
        return Admin::form(Board::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->display('name', '姓名');
            $form->display('email', '邮箱');
            $form->display('phone', '电话');
            $form->display('address', '地址');
            $form->display('body', '留言');

            $form->disableReset();
            $form->disableSubmit();

            $form->display('created_at', '提交时间');
        });
    }
}
