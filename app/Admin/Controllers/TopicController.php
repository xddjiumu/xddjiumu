<?php

namespace App\Admin\Controllers;

use App\Models\Topic;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class TopicController extends Controller
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
            ->header('站内文章')
            ->description('description_新闻资讯,常见问题')
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
            ->header('Detail')
            ->description('description')
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
            ->description('description')
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
            ->description('description_创建_新闻资讯,常见问题')
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

        $grid->id('Id');
        $grid->title('标题');
        $grid->body('内容');
        $grid->category_id('分类');
        $grid->view_count('查看次数');
        $grid->order('排序');
        $grid->excerpt('摘录');
        $grid->slug('SEO');
        $grid->created_at('创建时间');
        $grid->updated_at('更新时间');

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

        $show->id('Id');
        $show->title('标题');
        $show->body('内容');
        $show->category_id('Category id');
        $show->view_count('View count');
        $show->order('排序');
        $show->excerpt('Excerpt');
        $show->slug('SEO');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

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

        $form->text('title', '标题')->rules('required');
        $form->editor('body', '内容')->rules('required');
        $form->number('category_id', '分类类型');
        $form->number('view_count', '查看次数');
        $form->number('order', '排序');
        $form->textarea('excerpt', '摘录');
        $form->text('slug', 'SEO');

        return $form;
    }
}
