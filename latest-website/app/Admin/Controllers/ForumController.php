<?php

namespace App\Admin\Controllers;



use App\Helper\AdminHelper;
use App\Forum;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ForumController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Forum';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Forum());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('postalcode', __('Postal Code'));
        $grid->column('number', __('Number'));
        $grid->column('email', __('Email'));
        $grid->column('insurancetype', __('Insurance Type'));
        AdminHelper::gridDateFormat($grid, 'created_at', 'Created at');

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
        $show = new Show(Forum::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('postalcode', __('Postal Code'));
        $show->field('number', __('Number'));
        $show->field('email', __('Email'));
        $show->field('insurancetype', __('Insurance Type'));
        AdminHelper::showDateFormat($show , 'created_at', 'Created at');
        AdminHelper::showDateFormat($show, 'updated_at','Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Forum());

        $form->text('postalcode', __('Postal Code'))->rules('required');
        $form->text('number', __('Number'))->rules('required');
        $form->text('email', __('Email'))->rules('required');
        $form->switch('insurancetype', __('Insurance Type'));

        return $form;
    }
}
