<?php

class Main extends Controller
{

    public function index()
    {
        $model = $this->model('Articles');

        $articles = $model->getAllArticles();
//var_dump($articles);die;
        $this->view(
            'main/index',
            [
                'articles' => $articles
            ]
        );
    }

    public function read($article_id)
    {
        $this->view('main/about');
    }
}