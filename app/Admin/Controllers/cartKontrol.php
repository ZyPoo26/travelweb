<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\cart;


class cartKontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'cart';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new cart());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('product_name', __('Product name'));
        $grid->column('quantity', __('Quantity'));
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
        $show = new Show(cart::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('product_name', __('Product name'));
        $show->field('quantity', __('Quantity'));
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
        $form = new Form(new cart());

        $form->text('user_id', __('User id'));
        $form->text('product_name', __('Product name'));
        $form->number('quantity', __('Quantity'))->default(1);

        return $form;
    }
}
