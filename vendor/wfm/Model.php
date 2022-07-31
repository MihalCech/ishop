<?php

namespace wfm;


abstract class Model
{
    public $attr = [];
    public $errors = [];
    public $rules = [];
    public $labels = [];

    public function __construct()
    {
        Db::getInstance();
    }
}