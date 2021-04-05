<?php

class Main extends Controller
{

    public function index()
    {
        $model = $this->model('Articles');

        $articles = $model->getAllArticles();

        $this->view('main/index', [
            'articles' => $articles
        ]);
    }

    public function about()
    {
        $this->view('main/about');
    }
}