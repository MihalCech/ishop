<?php

namespace wfm;

class App
{
    public static $app;

    public function __construct()
    {
        session_start();
        $query = trim(urldecode($_SERVER['QUERY_STRING']), '/');
        new ErrorHandler();
        self::$app = Registry::getInstance();
        $this->getParams();
        $smarty = new \Smarty();
        $smarty->assignByRef("App", $this);
        $smarty->assignByRef("app", self::$app);
        Router::dispatch($query, $smarty);
    }

    protected function getParams()
    {
        $params = require_once CONF . '/params.php';
        if (!empty($params)){
            foreach ($params as $k => $v){
                self::$app->setProperty($k, $v);
            }
        }
    }
}