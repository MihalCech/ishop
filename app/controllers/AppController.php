<?php

namespace app\controllers;

use app\models\AppModel;
use app\widgets\language\Language;
use app\widgets\menu\Menu;
use dibi;
use wfm\App;
use wfm\Controller;


class AppController extends Controller
{
    public function __construct($route = [], $smarty)
    {
        parent::__construct($route, $smarty);
        new AppModel();
        App::$app->setProperty('languages', Language::getLanguages());
        App::$app->setProperty('language', Language::getLanguage(App::$app->getProperty('languages')));

        $lang_key = App::$app->getProperty('language');
        \wfm\Language::load($lang_key['code'], $this->route);
        $lang_data = \wfm\Language::$lang_data;

        $categories = dibi::query("SELECT c.*, cd.* FROM category c 
                        JOIN category_description cd
                        ON c.id = cd.category_id
                        WHERE cd.language_id = ", $lang_key['id']);
        $categories = $categories->fetchAssoc('category_id');
        App::$app->setProperty("categories_{$lang_key['code']}", $categories);

        ////////////////////////
        ///menu
        ///
        $menu_object = new Menu(['class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
            'cache' => 30,]);
        $menu = $menu_object->output();

        $lang = new Language($this->smarty);
        $this->smarty->assign('lang_data', $lang_data);
        $this->smarty->assign('menu', $menu);
        $this->smarty->assignByRef('lang', $lang);
    }
}