<?php

namespace App\Admin\Controllers;

use App\Models\Contactus;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ContactusController extends Controller
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
            ->header('用户留言')
            ->description('description_当有用户需要帮肋并能处理时请解决并记录下来')
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
            ->header('Edit')
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
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contactus);

        $grid->id('Id');
        $grid->name('联系人');
        $grid->email('邮箱');
        $grid->mobile('电话');
        $grid->message('留言信息或帮助');
        
        $grid->actions(function ($actions) {
            // 不在每一行后面展示查看按钮
            // 不在每一行后面展示删除按钮
            $actions->disableDelete();
            // 不在每一行后面展示编辑按钮
            $actions->disableEdit();
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
        $show = new Show(Contactus::findOrFail($id));

        $show->id('Id');
        $show->name('联系人');
        $show->email('邮箱');
        $show->mobile('电话');
        $show->message('留言信息或帮助');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return form
     */
    protected function form()
    {
        $form = new Form(new Contactus);

        $form->text('name', 'Name');
        $form->email('email', 'Email');
        $form->mobile('mobile', 'Mobile');
        $form->text('message', 'Message');

        return $form;
    }
}
