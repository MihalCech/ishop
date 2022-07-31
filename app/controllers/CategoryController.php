<?php

namespace app\controllers;

use app\models\BreadCrumbs;
use wfm\App;
use wfm\Pagination;

class CategoryController extends AppController
{

    public function viewAction()
    {
        $lang = App::$app->getProperty('language');
        $category = $this->model->getCategory($this->route['slug'], $lang);

        if (!$category){
            throw new \Exception("Page not found", 404);
        }
        foreach ($category as $row){
            $this->setMeta($row->title, $row->description, $row->keywords);
            $breadcrumbs = BreadCrumbs::getBreadCrumbs($row->id);
            $ids = $this->model->getIds($row->id);
            $ids = !$ids ? $row->id : $ids . $row->id;
        }


        $ids = explode(',', $ids);

        $page = abs(get('page')) ?: 1;
        $per_page = App::$app->getProperty('pagination');
        $total = $this->model->getCountProducts($ids, $lang);

        $pagination_object = new Pagination($page, $per_page, $total);
        $start = $pagination_object->getStart();
        $pagination = $pagination_object->getHtml();
        $countPages = $pagination_object->countPages;
        $products = $this->model->getProducts($ids, $lang, $start, $per_page);

        $this->set(compact('products', 'breadcrumbs', 'category', 'pagination', 'countPages'));

    }
}