<?php

namespace App\Admin\Controllers;

use App\Models\Seo;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SeosController extends Controller
{
    use ModelForm;

    protected $cates = [
        1 => '首页',
        2 => '行知丝路研究院',
        3 => '课程介绍',
        4 => '师资力量',
        5 => '在线报名',
        6 => '校友平台',
        7 => '联系我们',
    ];

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Seo');

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

            $content->header('Seo');

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

            $content->header('Seo');

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
        return Admin::grid(Seo::class, function (Grid $grid) {
            $grid->model()->orderBy('id', 'desc');
            $grid->id('ID')->sortable();

            $grid->cate_id('页面')->select($this->cates);
            $grid->title('Title')->editable();

            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Seo::class, function (Form $form) {
            $form->display('id', 'ID');

            $form->select('cate_id', '页面')->options($this->cates);
            $form->text('title', 'Title');
            $form->textarea('keywords', '关键词');
            $form->textarea('description', '描述');

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
