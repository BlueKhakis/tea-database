<?php

namespace App\Admin\Controllers;

use App\Models\Review;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ReviewController extends AdminController
{
    protected $title ='Review';

    protected function grid()
    {
        $grid = new Grid(new Review());

        $grid->column('id', __('Id'));
        $grid->column('text', __('Text'));
        $grid->column('rating', __('Rating'));
        $grid->column('tea_id', __('Tea_id'));
        $grid->column('user_id', __('User_id'));

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Review::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('text', __('Text'));
        $show->field('rating', __('Rating'));
        $show->field('tea_id', __('Tea_id'));
        $show->field('user_id', __('User_id'));

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Review());

        $form->saving(function (Form $form) {
            if ($form->password && $form->model()->password != $form->password) {
               $form->password = bcrypt($form->password);
            }
         });

        $form->textarea('text', __('Text'));
        $form->textarea('rating', __('Rating'));
        $form->textarea('tea_id', __('Tea_id'));
        $form->textarea('user_id', __('User_id'));
        return $form;
    }
}