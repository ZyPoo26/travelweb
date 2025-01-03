<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\rehber;

class RehberKontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'rehber';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new rehber());

        $grid->column('id', __('Id'));
        $grid->column('resim', __('Resim'));
        $grid->column('ad', __('Ad'));
        $grid->column('il', __('Il'));
        $grid->column('facebook', __('Facebook'));
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
        $show = new Show(rehber::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('resim', __('Resim'));
        $show->field('ad', __('Ad'));
        $show->field('il', __('Il'));
        $show->field('facebook', __('Facebook'));
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
        $form = new Form(new rehber());

        $form->text('resim', __('Resim'));
        $form->text('ad', __('Ad'));
        $form->text('il', __('Il'));
        $form->text('facebook', __('Facebook'));

        return $form;
    }
}
