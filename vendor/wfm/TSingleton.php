<?php

namespace wfm;

trait TSingleton
{
    private static  $instance = null;

    private function __construct ()
    {

    }

    public static function getInstance()
    {
        if (self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}