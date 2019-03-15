<?php

namespace App\Admin\Controllers;

use App\Models\Topic;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class TopicsController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('文章列表')
            ->description('description_新闻资讯,公司动态,帖子列表')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('查看文章')
            ->description('description查看文章')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑文章')
            ->description('description编辑文章')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('创建文章')
            ->description('description创建文章')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Topic);

        $grid->id('ID');
        $grid->title('标题');
        $grid->body('帖子内容');
        // $grid->avatar('头像');
        $grid->category_id('分类 ID');
        // $grid->view_count('查看总数');
        $grid->order('排序');
        // $grid->excerpt('SEO 优化');
        // $grid->slug('SEO 友好的 URI');
        // $grid->created_at('创建时间');
        $grid->actions(function ($actions) {
            // 不在每一行后面展示查看按钮
            // $actions->disableView();
            // 不在每一行后面展示删除按钮
            $actions->disableDelete();
            // 不在每一行后面展示编辑按钮
            // $actions->disableEdit();
        });
        $grid->tools(function ($tools) {
            // 禁用批量删除按钮
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Topic::findOrFail($id));

        $show->id('ID');
        $show->title('标题');
        $show->body('帖子内容');
        $show->avatar('头像');
        $show->category_id('分类 ID');
        $show->view_count('查看总数');
        $show->order('排序');
        $show->excerpt('SEO 优化');
        $show->slug('SEO 友好的 URI');
        $show->created_at('创建时间');
        $show->updated_at('更新时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Topic);

        $form->text('title', '标题');
        $form->textarea('body', '帖子内容');
        $form->image('avatar', '头像');
        $form->number('category_id', '分类 ID');
        $form->number('view_count', '查看总数');
        $form->number('order', '排序');
        $form->textarea('excerpt', 'SEO 优化');
        $form->text('slug', 'SEO 友好的 URI');

        return $form;
    }
}
