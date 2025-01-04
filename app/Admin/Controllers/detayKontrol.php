<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\detay;

class detayKontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'detay';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new detay());

        $grid->column('id', __('Id'));
        $grid->column('image')->image();
        $grid->column('tur_name', __('Tur name'));
        $grid->column('fiyat', __('Fiyat'));
        $grid->column('indirimli_fiyat', __('Indirimli fiyat'));
        $grid->column('aciklama', __('Aciklama'));
        $grid->column('gün', __('Gün'));
        $grid->column('ay', __('Ay'));
        $grid->column('yer', __('Yer'));
        $grid->column('detayli_aciklama', __('Detayli aciklama'));
        $grid->column('yaninizda_olmali', __('Yaninizda olmali'));
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
        $show = new Show(detay::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('tur_name', __('Tur name'));
        $show->field('fiyat', __('Fiyat'));
        $show->field('indirimli_fiyat', __('Indirimli fiyat'));
        $show->field('aciklama', __('Aciklama'));
        $show->field('gün', __('Gün'));
        $show->field('ay', __('Ay'));
        $show->field('yer', __('Yer'));
        $show->field('detayli_aciklama', __('Detayli aciklama'));
        $show->field('yaninizda_olmali', __('Yaninizda olmali'));
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
        $form = new Form(new detay());

        $form->image('image', __('Image'));
        $form->text('tur_name', __('Tur name'));
        $form->text('fiyat', __('Fiyat'));
        $form->text('indirimli_fiyat', __('Indirimli fiyat'));
        $form->text('aciklama', __('Aciklama'));
        $form->text('gün', __('Gün'));
        $form->text('ay', __('Ay'));
        $form->text('yer', __('Yer'));
        $form->text('detayli_aciklama', __('Detayli aciklama'));
        $form->text('yaninizda_olmali', __('Yaninizda olmali'));

        return $form;
    }


}
