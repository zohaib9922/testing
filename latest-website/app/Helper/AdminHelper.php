<?php
namespace App\Helper;

use App\Admin\Actions\Post\BatchRestore;
use App\Admin\Actions\Post\Restore;
use Carbon\Carbon;
use Encore\Admin\Grid;

class AdminHelper{

//    static $shortCodes = [
//        '[{banner}]',
//        '[{search}]',
//        '[{educationImage}]',
//        '[{courseBlock}]',
//        '[{testimonialBlock}]',
//        '[{homeVideoSection}]'
//    ];

    static function trashAndRestore($grid){
        $grid->filter(function($filter) {
            $filter->scope('trashed', 'Recycle Bin')->onlyTrashed();
        });
        $grid->actions (function ($actions) {
            if (\ request('_ scope_') == 'trashed') {
                $actions->add(new Restore());
            }
        });
        $grid->batchActions (function($batch) {
            if (\request('_scope_') == 'trashed') {
                $batch->add(new BatchRestore());
            }
        });

    }


//    public function seoFields($form){
//        $form->fieldset('SEO Settings', function ($form) {
//            $form->text('title_tag', __('Page title'))->rules('max:60')->setWidth(12, 5)->help("Google typically displays the first 50–60 characters of a title tag.");
//            $form->textarea('description_tag', __('Meta description'))->rules('max:160')->setWidth(12, 5)->help("Meta descriptions can be any length, but Google generally truncates snippets to ~155–160 characters. It's best to keep meta descriptions long enough that they're sufficiently descriptive, so we recommend descriptions between 50–160 characters.");
//        })->collapsed();
//    }

//    public function showSeoFields($show){
//        $show->field('title_tag', __('Page title'));
//        $show->field('description_tag', __('Meta Description'));
//    }
//
//    public function showStatusButton($show){
//        $show->field('status', __('Status'))->as(function ($status) {
//            return $status ? 'Active' : 'Disabled';
//        });
//    }

    static function showDateFormat($show, $type = 'created_at', $label = 'Created at'){
        $show->field($type, __($label))->as(function ($field) {
            return Carbon::parse($field)->format('M d Y');
        });
    }

    static function gridDateFormat($grid, $type = 'created_at', $label = 'Created at'){
        $grid->column($type)->display(function ($title) {
            return Carbon::parse($title)->format('M d Y');
        });
    }

//    public function categories($form){
//        $form->fieldset('Categories', function ($form) {
//            $form->multipleSelect('Categories')->help('You can choose multiple categories.')->options(Category::where('status', 1)->pluck('name', 'id'))->setWidth(12, 5);
//        })->collapsed();
//    }
//
//    public function businessTypes($form){
//        $form->fieldset('Business Types', function ($form) {
//            $form->multipleSelect('businessTypes', 'Business Types')->help('You can choose multiple business types.')->options(BusinessType::where('status', 1)->pluck('title', 'id'))->setWidth(12, 5);
//        })->collapsed();
//    }

    static function featuredImage($form, $label = "Image"){
        $form->image('image', $label)->rules('mimes:jpeg,bmp,png,jpg|required');
    }

    static function displayImage($show, $label = "Image"){
        $show->field('image', __($label))->image();
    }

    static function addImage($form){
        $form->image('image', __('Image'));
    }

    static function seoFields($form){
        $form->text('meta_title', __('Meta title'));
        $form->textarea('meta_description', __('Meta description'));
    }

//    public function tags($form){
//        $form->fieldset('Tags', function ($form) {
//            $form->multipleSelect('Tags')->options(Tag::where('status', 1)->pluck('tag', 'id'))->setWidth(12, 5)->help('You can choose multiple tags, tags are use to be in search.');
//        })->collapsed();
//    }
//
//
//    public function excerpt($form){
//        $form->fieldset('Excerpt', function ($form) {
//            $form->textarea('short_description', __('Excerpt'))->setWidth(12, 5)->help('An excerpt is used for item summary');
//        })->collapsed();
//    }

    static function alphaNumberic($length = 6){
        return substr(md5(microtime()), 0, $length);
    }



}
