<?php

namespace App\Admin\Controllers;

use App\Models\Page;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Layout\Row;
use Encore\Admin\Tree;
use Encore\Admin\Widgets\Box;

class PagesController extends Controller
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

            $content->header('行知丝路学院');

            $content->row(function (Row $row) {
                $row->column(4, $this->treeView()->render());

                $row->column(8, function (Column $column) {
                    $form = new \Encore\Admin\Widgets\Form();
                    $form->action(admin_base_path('pages'));

                    $form->select('parent_id', '父级菜单')->options(Page::selectOptions());
                    $form->text('title', '标题')->rules('required');
                    $form->ueditor('body', '内容')->help('选填项');
                    $form->image('banner', 'Banner')->uniqueName()->help('选填项');

                    $form->hidden('_token')->default(csrf_token());

                    $column->append((new Box(trans('admin.new'), $form))->style('success'));
                });
            });
        });
    }

    public function show($id)
    {
        return redirect()->route('page.edit', ['id' => $id]);
    }


    protected function treeView()
    {
        return Page::tree(function (Tree $tree) {
            $tree->disableCreate();

            $tree->branch(function ($branch) {
                $payload = "<strong>{$branch['title']}</strong>";

                return $payload;
            });
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

            $content->header('行知丝路学院');

            $content->row($this->form()->edit($id));
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Page::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    public function form()
    {
        return Page::form(function (Form $form) {
            $form->display('id', 'ID');

            $form->select('parent_id', '父级菜单')->options(Page::selectOptions());
            $form->text('title', '标题')->rules('required');
            $form->ueditor('body', '内容')->help('选填项');
            $form->image('banner', 'Banner')->uniqueName()->help('选填项');

            $form->display('created_at', trans('admin.created_at'));
            $form->display('updated_at', trans('admin.updated_at'));
        });
    }
}
