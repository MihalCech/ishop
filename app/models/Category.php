<?php

namespace app\models;

use dibi;
use wfm\App;

class Category extends AppModel
{
    public function getCategory($slug, $lang)
    {
        $result = dibi::query("SELECT c.*, cd.* FROM category c JOIN category_description cd 
    ON c.id = cd.category_id WHERE c.slug = ? AND cd.language_id = ?", $slug, $lang['id']);
        return $result;
    }

    public function getIds($id)
    {
        $lang = App::$app->getProperty('language')['code'];
        $categories = App::$app->getProperty("categories_{$lang}");
        $ids = '';
        foreach ($categories as $k => $v){
            if ($v->parent_id == $id){
                $ids .= $k . ',';
                $ids .= $this->getIds($k);
            }
        }
        return $ids;
    }

    public function getProducts($ids, $lang, $start, $per_page)
    {
        return dibi::query("SELECT p.*, pd.* FROM product p JOIN product_description pd 
    ON p.id = pd.product_id WHERE p.status = 1 AND p.category_id IN (%i) AND pd.language_id = ? 
    LIMIT {$start}, {$per_page}", $ids, $lang['id']);
    }

    public function getCountProducts($ids, $lang)
    {
        $res = dibi::query("SELECT p.*, pd.* FROM product p JOIN product_description pd 
    ON p.id = pd.product_id WHERE p.status = 1 AND p.category_id IN (%i) AND pd.language_id = ?", $ids, $lang['id']);
        return $res->getRowCount();
    }

}