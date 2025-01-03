<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\shop;

class shopKontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'shop';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new shop());

        $grid->column('id', __('Id'));
        $grid->column('link', __('Link'));
        $grid->column('image', __('Image'));
        $grid->column('urun_adi', __('Urun adi'));
        $grid->column('aciklama', __('Aciklama'));
        $grid->column('urun_fiyat', __('Urun fiyat'));
        $grid->column('urun_indirim', __('Urun indirim'));
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
        $show = new Show(shop::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('link', __('Link'));
        $show->field('image', __('Image'));
        $show->field('urun_adi', __('Urun adi'));
        $show->field('aciklama', __('Aciklama'));
        $show->field('urun_fiyat', __('Urun fiyat'));
        $show->field('urun_indirim', __('Urun indirim'));
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
        $form = new Form(new shop());

        $form->url('link', __('Link'));
        $form->image('image', __('Image'));
        $form->text('urun_adi', __('Urun adi'));
        $form->text('aciklama', __('Aciklama'));
        $form->text('urun_fiyat', __('Urun fiyat'));
        $form->text('urun_indirim', __('Urun indirim'));

        return $form;
    }
}
