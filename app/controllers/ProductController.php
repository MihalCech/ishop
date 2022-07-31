<?php

namespace app\controllers;

use app\models\BreadCrumbs;
use wfm\App;

/** @property Product $model */

class ProductController extends AppController
{
    public function viewAction()
    {
        $lang = App::$app->getProperty('language');
        $product = $this->model->getProduct($lang, $this->route['slug']);

        if (!$product){
            throw new \Exception('Product not found', 404);
        }

        foreach ($product as $row){
            $id = $row->id;
            $category_id = $row->category_id;
            $this->setMeta($row->title, $row->description, $row->keywords);
            $title = $row->title;
        }
        $breadcrumbs = BreadCrumbs::getBreadCrumbs($category_id, $title);

        $gallery = $this->model->getGallery($id);
        $this->set(compact('product', 'gallery', 'id', 'breadcrumbs'));
    }
}