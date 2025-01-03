<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\tümtur;

class tümtürKontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'tümtur';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new tümtür());

        $grid->column('id', __('Id'));
        $grid->column('sayfa_link', __('Sayfa link'));
        $grid->column('image', __('Image'));
        $grid->column('indirim', __('Indirim'));
        $grid->column('tür_il', __('Tür il'));
        $grid->column('tür_açiklama', __('Tür açiklama'));
        $grid->column('tür_gün', __('Tür gün'));
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
        $show = new Show(tümtür::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('sayfa_link', __('Sayfa link'));
        $show->field('image', __('Image'));
        $show->field('indirim', __('Indirim'));
        $show->field('tür_il', __('Tür il'));
        $show->field('tür_açiklama', __('Tür açiklama'));
        $show->field('tür_gün', __('Tür gün'));
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
        $form = new Form(new tümtür());

        $form->text('sayfa_link', __('Sayfa link'));
        $form->image('image', __('Image'));
        $form->text('indirim', __('Indirim'));
        $form->text('tür_il', __('Tür il'));
        $form->text('tür_açiklama', __('Tür açiklama'));
        $form->text('tür_gün', __('Tür gün'));
        $form->text('normal_fiyat', __('Normal fiyat'));
        $form->text('indirimli_fiyat', __('Indirimli fiyat'));

        return $form;
    }
}
