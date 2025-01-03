<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\city;

class cityKontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'city';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new city());

        $grid->column('id', __('Id'));
        $grid->column('sayfa_link', __('Sayfa link'));
        $grid->column('image', __('Image'));
        $grid->column('indirim', __('Indirim'));
        $grid->column('il', __('Il'));
        $grid->column('açiklama', __('Açiklama'));
        $grid->column('gün', __('Gün'));
        $grid->column('normal_fiyat', __('Normal fiyat'));
        $grid->column('indirimli_fiyat', __('Indirimli fiyat'));
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
        $show = new Show(city::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('sayfa_link', __('Sayfa link'));
        $show->field('image', __('Image'));
        $show->field('indirim', __('Indirim'));
        $show->field('il', __('Il'));
        $show->field('açiklama', __('Açiklama'));
        $show->field('gün', __('Gün'));
        $show->field('normal_fiyat', __('Normal fiyat'));
        $show->field('indirimli_fiyat', __('Indirimli fiyat'));
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
        $form = new Form(new city());

        $form->text('sayfa_link', __('Sayfa link'));
        $form->image('image', __('Image'));
        $form->text('indirim', __('Indirim'));
        $form->text('il', __('Il'));
        $form->text('açiklama', __('Açiklama'));
        $form->text('gün', __('Gün'));
        $form->text('normal_fiyat', __('Normal fiyat'));
        $form->text('indirimli_fiyat', __('Indirimli fiyat'));

        return $form;
    }
}
