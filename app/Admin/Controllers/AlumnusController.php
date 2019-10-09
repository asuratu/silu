<?php

namespace App\Admin\Controllers;

use App\Models\Alumnu;

use App\Models\AlumnusCate;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AlumnusController extends Controller
{
    use ModelForm;
    
    protected $cates;
    protected $type;

    public function __construct()
    {
        $this->cates = AlumnusCate::pluck('name', 'id')->toArray();
        $this->type = @(int)@$_GET['type'];
    }

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        $type = $this->type;
        if (!in_array($type, array_keys($this->cates))){
            return redirect()->route('admin.alumnus', ['type'=>1]);
        }
        return Admin::content(function (Content $content) use($type){

            $content->header('校友平台');
            $content->description(@$this->cates[$type]);

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

            $content->header('校友平台');

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

            $content->header('校友平台');

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
        return Admin::grid(Alumnu::class, function (Grid $grid) {
            $cates = $this->cates;
            $grid->model()->orderBy('created_at', 'desc');
            $grid->model()->where('cate_id', $this->type);
            $grid->id('ID')->sortable();

            $grid->cate_id('分类名称')->display(function ($cate_id) use($cates){
                return $cates[$cate_id];
            })->label();
            $grid->title('标题')->editable();
            $grid->img('图片')->image('', 100, 100);
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
    protected function form()
    {
        return Admin::form(Alumnu::class, function (Form $form) {
            $form->tools(function (Form\Tools $tools) {
                // 去掉跳转列表按钮
                $tools->disableListButton();
            });
            $form->display('id', 'ID');

            $form->select('cate_id', '分类名称')->options($this->cates)->rules('required');
            $form->text('title', '标题')->rules('required');
            $form->image('img', '图片')->rules('required')->removable()->uniqueName();
            $form->text('description', '图片描述')->help('可选填');
            $form->ueditor('body', '内容')->rules('required');

            $form->switch('recommend', '是否推荐');
            $form->number('sort', '推荐排序');
            $form->image('recommend_img', '推荐图片')->help('可选填（推荐到首页时展示，推荐尺寸：校友活动 230 * 302 ，精彩活动 620 * 215 ， 新闻列表 500 * 267 ）')->removable()->uniqueName();

            $form->datetime('created_at', '创建时间');
            $form->display('updated_at', '修改时间');
        });
    }
}
