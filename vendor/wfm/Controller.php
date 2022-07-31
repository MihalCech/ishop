<?php

namespace wfm;

abstract class Controller
{
    public $route = [];
    public $data = [];
    public $meta = ["title" => "", "description" => "", "keywords" => ""];
    public $layout = '';
    public $view = '';
    public $model;
    public $smarty;

    public function __construct($route = [], $smarty)
    {
        $this->route = $route;
        $this->smarty = $smarty;
    }

    public function getModel()
    {
        $model = 'app\models\\' . $this->route['admin_prefix'] . $this->route['controller'];
        if (class_exists($model)){
            $this->model = new $model();
        }
    }

    public function getView()
    {
        $this->view = $this->view ?: $this->route['action'];
        (new View($this->route, $this->layout, $this->view, $this->meta, $this->smarty))->render($this->data);
    }

    public function set($data)
    {
        $this->data = $data;
    }

    public function setMeta($title = '', $description = '', $keywords = '')
    {
        $this->meta = [
            "title" => "{$title}",
            "description" => "{$description}",
            "keywords" => "{$keywords}"
        ];
    }

    public function isAjax()
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }

    public function loadView($view, $vars = [])
    {
        extract($vars);
        $this->smarty->assign('vars', $vars);
        $this->smarty->assign("SESSION", $_SESSION);
        $prefix = str_replace("\\", "/", $this->route['admin_prefix']);
        $view_new = APP . "/views/templates/" . $prefix . "{$this->route['controller']}/{$view}.tpl";
        $this->smarty->display($view_new);
        die();
    }
}