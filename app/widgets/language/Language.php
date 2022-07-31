<?php

namespace app\widgets\language;

use dibi;
use wfm\App;

class Language
{
    public $tpl;
    public $languages;
    public $language;
    public $smarty;

    public function __construct($smarty)
    {
        $this->smarty = $smarty;
        $this->tpl = "widgets/lang.tpl";
        $this->run();
    }

    protected function run()
    {
        $this->languages = App::$app->getProperty("languages");
        $this->language = App::$app->getProperty("language");
    }

    public static function getLanguages()
    {
        $result =  dibi::query("SELECT `code`, `title`, `base`, `id` FROM `language` ORDER BY `base` DESC");
        return $result->fetchAssoc("code");
    }

    public static function getLanguage($languages)
    {
        $lang = App::$app->getProperty('lang');
        if ($lang && array_key_exists($lang, $languages)){
            $key = $lang;
        }elseif (!$lang){
            $key = key($languages);
        }else{
            throw new \Exception("Not found language {$lang}", 404);
        }

        $lang_info = $languages[$key];
        return $lang_info;
    }
    public function getHtml()
    {
        return $this->smarty->fetch($this->tpl);
    }
}