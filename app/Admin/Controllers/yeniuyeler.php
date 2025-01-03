<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Newusers;

class Newusers extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Newusers';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Newusers());

        $grid->column('id', __('Id'));
        $grid->column('e-mail', __('E mail'));
        $grid->column('password', __('Password'));
        $grid->column('try_password', __('Try password'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Newusers::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('e-mail', __('E mail'));
        $show->field('password', __('Password'));
        $show->field('try_password', __('Try password'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Newusers());

        $form->text('e-mail', __('E mail'));
        $form->password('password', __('Password'));
        $form->text('try_password', __('Try password'));

        return $form;
    }
}
