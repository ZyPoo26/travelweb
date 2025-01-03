<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Gezi;

class GeziKontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Gezi';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Gezi());

        $grid->column('id', __('Id'));
        $grid->column('image')->image();
        $grid->column('indirim', __('Indirim'));
        $grid->column('tur_adi', __('Tur adi'));
        $grid->column('tur_aciklamasi', __('Tur aciklamasi'));
        $grid->column('gün', __('Gün'));
        $grid->column('asil_fiyat', __('Asil fiyat'));
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
        $show = new Show(Gezi::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('indirim', __('Indirim'));
        $show->field('tur_adi', __('Tur adi'));
        $show->field('tur_aciklamasi', __('Tur aciklamasi'));
        $show->field('gün', __('Gün'));
        $show->field('asil_fiyat', __('Asil fiyat'));
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
        $form = new Form(new Gezi());

        $form->image('image', __('Image'));
        $form->text('indirim', __('Indirim'));
        $form->text('tur_adi', __('Tur adi'));
        $form->text('tur_aciklamasi', __('Tur aciklamasi'));
        $form->text('gün', __('Gün'));
        $form->text('asil_fiyat', __('Asil fiyat'));
        $form->text('indirimli_fiyat', __('Indirimli fiyat'));

        return $form;
    }
}
