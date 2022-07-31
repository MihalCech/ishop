<?php

namespace wfm;

class View
{
    public $content = '';
    public $route;
    public $layout = '';
    public $view = '';
    public $meta = [];
    public $smarty;

    public function __construct($route, $layout = '', $view = '', $meta = [], $smarty)
    {
        $this->route = $route;
        if (false !== $this->layout){
            $this->layout = $layout ?: LAYOUT;
        }
        $this->view = $view;
        $this->meta = $meta;
        $this->smarty = $smarty;
    }

    public function render($data)
    {
        if (is_array($data)) {
            extract($data);
        }
        $config = APP . "/views/configs";
        $cache = APP . "/views/cache";
        $templates = APP . "/views/templates";
        $templates_c = APP . "/views/templates_c";
        $this->smarty->setConfigDir("$config");
        $this->smarty->setTemplateDir("$templates");
        $this->smarty->setCompileDir("$templates_c");
        $this->smarty->setCacheDir("$cache");

        $prefix = str_replace("\\", "/", $this->route['admin_prefix']);
        $viewFile = $prefix . "{$this->route['controller']}/{$this->view}.tpl";

        if ($this->smarty->templateExists("{$viewFile}")){
            $this->smarty->assign("data", $data);
            $this->smarty->assign('SESSION', $_SESSION);
            $this->smarty->assignByRef('this',$this);
            $this->content = $this->smarty->fetch($viewFile);
        }else{
            throw new \Exception("View not found", 404);
        }

        if (false !== $this->layout){
            $layoutFile = "layouts/{$this->layout}.tpl";
            if ($this->smarty->templateExists("{$layoutFile}")){
                $this->smarty->assign('SESSION', $_SESSION);
                $this->smarty->assign("data", $data);
                $this->smarty->assignByRef('this',$this);
                $this->smarty->display($layoutFile);
            }else{
                throw new \Exception("Not found sablon {$layoutFile}", 500);
            }
        }
    }
    public function getMeta()
    {
        $out = '<title>' . $this->meta['title'] . '</title>' . PHP_EOL;
        $out .= '<meta name="description" content="'. $this->meta['description'] .'">' . PHP_EOL;
        $out .= '<meta name="keywords" content="'. $this->meta['keywords'] .'">' . PHP_EOL;
        return $out;
    }
    public function getPart($file, $data = null)
    {
        $file = "{$file}.tpl";
        if ($this->smarty->templateExists("{$file}")){
            $this->smarty->assign('SESSION', $_SESSION);
            $this->smarty->display($file);
        }else{
            echo "$file not found";
        }
    }
}