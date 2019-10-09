<?php

namespace App\Admin\Controllers;

use App\Models\Setting;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SettingsController extends Controller
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

            $content->header('设置');

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

            $content->header('设置');

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

            $content->header('设置');

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
        return Admin::grid(Setting::class, function (Grid $grid) {

            $grid->phone('联系电话')->editable();
            $grid->address('联系地址')->editable();
            $grid->email('Email')->editable();
            $grid->copyright('版权信息')->editable();

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

        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Setting::class, function (Form $form) {

            $form->text('phone', '联系电话')->rules('required');
            $form->textarea('address', '联系地址')->rules('required');
            $form->text('email', 'Email')->rules('required');
            $form->text('copyright', '版权信息')->rules('required');
            $form->text('phone_2', '电话（侧边栏）')->rules('required');
            $form->image('wechat', 'Wechat')->rules('required')->removable();
            $form->textarea('intro', '简介')->rules('required');

        });
    }
}
