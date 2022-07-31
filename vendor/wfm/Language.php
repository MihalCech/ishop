<?php

namespace wfm;

class Language
{
    public static $lang_data = [];
    public static $lang_layout = [];
    public static $lang_view = [];

    public static function load($code, $route)
    {
        $lang_layout = APP . "/languages/{$code}.php";
        $lang_view = APP . "/languages/{$code}/{$route['controller']}/{$route['action']}.php";
        if (file_exists($lang_layout)){
            self::$lang_layout = require_once $lang_layout;
        }
        if (file_exists($lang_view)){
            self::$lang_view = require_once $lang_view;
        }
        self::$lang_data = array_merge(self::$lang_layout, self::$lang_view);
    }

    public static function get($key)
    {
        return self::$lang_data[$key] ?? $key;
    }
}