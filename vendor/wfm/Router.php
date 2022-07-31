<?php

namespace wfm;

class Router
{
    protected static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    protected static function removeQueryString($url)
    {
        $url = explode('&', $url, 2);
        $res = strpos($url[0], '=');
        if ($res){
            return '';
        }
        return rtrim($url[0], '/');
    }

    public static function dispatch($url, $smarty)
    {
        $url = self::removeQueryString($url);
        if (self::matchRoute($url)){
            if (!empty(self::$route['lang'])){
                App::$app->setProperty('lang', self::$route['lang']);
            }
           $controller = 'app\controllers\\' . self::$route['admin_prefix'] .
                self::$route['controller'] . 'Controller';
           if (class_exists($controller)){
               /** @var Controller $controllerObject */
               $controllerObject = new $controller(self::$route, $smarty);
               $controllerObject->getModel();
               $action = self::lowerCamelCase(self::$route['action'] . 'Action');
               if (method_exists($controllerObject, $action)){
                    $controllerObject->$action();
                    $controllerObject->getView();
               }else{
                   throw new \Exception("Method {$action} not found", 404);
               }
           }else{
               throw new \Exception("Controller {$controller} not found", 404);
           }
        }else{
            throw new \Exception("Page not found", 404);
        }
    }

    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route){
            if (preg_match("#{$pattern}#", $url, $matches)){
                foreach ($matches as $k => $v){
                    if (is_string($k)){
                        $route[$k] = $v;
                    }
                }
                if (empty($route['action'])){
                    $route['action'] = 'index';
                }
                if (!isset($route['admin_prefix'])){
                    $route['admin_prefix'] = '';
                }else{
                    $route['admin_prefix'] .= '\\';
                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    public static function upperCamelCase($str)
    {
        $str = str_replace('-', ' ', $str);
        $str = ucwords($str);
        $str = str_replace(' ', '', $str);
        return $str;
    }

    public static function lowerCamelCase($str)
    {
        return lcfirst(self::upperCamelCase($str));
    }
}