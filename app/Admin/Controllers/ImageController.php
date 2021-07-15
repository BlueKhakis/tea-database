<?php

namespace App\Admin\Controllers;

use App\Models\Image;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ImageController extends AdminController
{
    protected $title ='Image';

    protected function grid()
    {
        $grid = new Grid(new Image());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('image', __('Image'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Image::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Image());

        $form->saving(function (Form $form) {
            if ($form->password && $form->model()->password != $form->password) {
               $form->password = bcrypt($form->password);
            }
         });

        //  $form->image($column[, $label]);
        $form->image('image', __('Image'));
        // $form->textarea('name', __('Name'));
        // $form->textarea('email', __('Email'));
        // $form->textarea('password', __('Password'));

        return $form;
    }
}