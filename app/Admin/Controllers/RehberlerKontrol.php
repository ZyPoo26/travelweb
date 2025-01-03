<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\rehberler;

class RehberlerKontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'rehberler';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new rehberler());

        $grid->column('id', __('Id'));
        $grid->column('image')->image();
        $grid->column('ad', __('Ad'));
        $grid->column('il', __('Il'));
        $grid->column('facebook', __('Facebook'));
        $grid->column('instagram', __('Instagram'));
        $grid->column('twitter', __('Twitter'));
        $grid->column('açiklama', __('Açiklama'));
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
        $show = new Show(rehberler::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('ad', __('Ad'));
        $show->field('il', __('Il'));
        $show->field('facebook', __('Facebook'));
        $show->field('instagram', __('Instagram'));
        $show->field('twitter', __('Twitter'));
        $show->field('açiklama', __('Açiklama'));
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
        $form = new Form(new rehberler());

        $form->image('image', __('Image'));
        $form->text('ad', __('Ad'));
        $form->text('il', __('Il'));
        $form->text('facebook', __('Facebook'));
        $form->text('instagram', __('Instagram'));
        $form->text('twitter', __('Twitter'));
        $form->text('açiklama', __('Açiklama'));

        return $form;
    }
}
