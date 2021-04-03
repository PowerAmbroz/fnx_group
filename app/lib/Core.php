<?php

//    Core App Class
class Core
{
    protected $currentController = 'Main';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();
//        Look in controllers for first value, ucwords - capitalize first letter
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
//            Sets a new controller
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }
//        Require controller
        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

//        Check for secound part of url
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

//        Get params
        $this->params = $url ? array_values($url) : [];

//        Call a calback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
//            Allows to filter url as a string.number
            $url = filter_var($url, FILTER_SANITIZE_URL);
//            Break into an array
            $url = explode('/', $url);
            return $url;
        }
    }
}