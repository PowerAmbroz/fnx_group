<?php

class Main extends Controller
{


    public function __construct()
    {
    }

    public function index()
    {
        $model = $this->model('Articles');

        $articles = $model->getAllArticles();

//        var_dump($articles);

//die;
        $data = [
            'title' => 'Home Page',
            'articles' => $articles
        ];

        $this->view('main/index', [
            'articles' => $articles
        ]);
    }

    public function about()
    {
        $this->view('main/about');
    }
}