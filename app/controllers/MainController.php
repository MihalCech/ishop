<?php

namespace app\controllers;


use dibi;
use wfm\App;
use wfm\Language;

class MainController extends AppController
{
    public function indexAction()
    {
        $slides = dibi::query("SELECT * FROM slider");
        $lang = App::$app->getProperty('language');
        $products = $this->model->getHits($lang['id'],6);
        $this->set(compact("slides", "products"));
        $this->setMeta(Language::$lang_data['main_index_meta_title'],
            Language::$lang_data['main_index_meta_description'],
            Language::$lang_data['main_index_meta_keywords']);
    }
}