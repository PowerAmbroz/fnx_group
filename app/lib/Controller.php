<?php

//    Load model and view
class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
//        Instance model
        return new $model();
    }

//    Load the view. Check if file exists
    public function view($view, $data = [])
    {
        if(file_exists('../app/views/' . $view . '.php')){
            require_once '../app/views/' . $view . '.php';
        }else{
            die('View does not exist');
        }
    }
}