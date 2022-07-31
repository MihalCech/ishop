<?php

const DEBUG = 1;
define("ROOT", dirname(__DIR__));
const WWW = ROOT . "/public";
const APP = ROOT . "/app";
const CORE = ROOT . "/vendor/wfm";
const HELPERS = ROOT . "/vendor/wfm/helpers";
const CACHE = ROOT . "/tmp/cache";
const LOGS = ROOT . "/tmp/logs";
const CONF = ROOT . "/config";
const LAYOUT = "ishop";
const PATH = "http://ishop2.cz";
const ADMIN = "http://ishop2.cz/admin";
const NO_IMAGE = "/uploads/no_image.jpeg";

require_once ROOT . "/vendor/autoload.php";