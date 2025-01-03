<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\iller;

class illerKontrol extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'iller';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new iller());

        $grid->column('id', __('Id'));
        $grid->column('incele_link', __('Incele link'));
        $grid->column('image')->image();
        $grid->column('il_ad', __('Il_ad'));
        $grid->column('gün', __('Gün'));
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
        $show = new Show(iller::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('incele_link', __('Incele link'));
        $show->field('image', __('Image'));
        $show->field('il_ad', __('Il_ad'));
        $show->field('gün', __('Gün'));
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
        $form = new Form(new iller());

        $form->text('incele_link', __('Incele link'));
        $form->image('image', __('Image'));
        $form->text('il_ad', __('Il_ad'));
        $form->text('gün', __('Gün'));

        return $form;
    }
}
