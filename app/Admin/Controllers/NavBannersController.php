<?php

namespace App\Admin\Controllers;

use App\Models\NavBanner;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class NavBannersController extends Controller
{
    use ModelForm;

    protected $cates;

    public function __construct()
    {
        $this->cates = [
            1 => '丝路大学',
            2 => '课程介绍',
            3 => '师资资源',
            4 => '在线报名',
            5 => '校友平台',
            6 => '联系我们',
        ];
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('栏目页banner');
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

            $content->header('栏目页banner');

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

            $content->header('栏目页banner');

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
        return Admin::grid(NavBanner::class, function (Grid $grid) {
            $cates = $this->cates;
            $grid->model()->orderBy('id', 'desc');
            $grid->id('ID')->sortable();

            $grid->cate_id('栏目名称')->display(function ($cate_id) use($cates){
                return $cates[$cate_id];
            })->label();
            $grid->img('图片')->image('', 200, 200);

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
        return Admin::form(NavBanner::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->select('cate_id', '栏目名称')->options($this->cates);
            $form->image('img', '图片')->rules('required')->help('建议尺寸：1920*380')->uniqueName();

            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
