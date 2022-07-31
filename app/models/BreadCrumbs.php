<?php

namespace app\models;

use wfm\App;

class BreadCrumbs extends AppModel
{
    public static function getBreadCrumbs($category_id, $name = '')
    {
        $lang = App::$app->getProperty('language')['code'];
        $categories = App::$app->getProperty("categories_{$lang}");
        $breadcrumbs_arr = self::getParts($categories, $category_id);
        $lang_data = \wfm\Language::$lang_data;
        $breadcrumbs = "<li class='breadcrumb-item'><a href='" . base_url() . "'>" . $lang_data['tpl_home_breadcrumbs'] . "</a></li>";
        if ($breadcrumbs_arr) {
            foreach ($breadcrumbs_arr as $slug => $title) {
                $breadcrumbs .= "<li class='breadcrumb-item'><a href='category/{$slug}'>{$title}</a></li>";
            }
        }
        if ($name) {
            $breadcrumbs .= "<li class='breadcrumb-item active'>$name</li>";
        }
        return $breadcrumbs;
    }

    public static function getParts($cats, $id)
    {
        if (!$id) return false;
        $bread_crumbs = [];
        foreach ($cats as $k => $v){
            if (isset($cats[$id])){
                $bread_crumbs[$cats[$id]['slug']] = $cats[$id]['title'];
                $id = $cats[$id]['parent_id'];
            }else{
                break;
            }
        }
        return array_reverse($bread_crumbs, true);
    }
}