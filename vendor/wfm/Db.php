<?php

namespace wfm;
use Dibi;

class Db
{
    use TSingleton;

    /**
     * @throws Dibi\Exception
     */
    private function __construct()
    {
        $db = require_once CONF ."/db.php";
        \dibi::connect($db);
    }
}