<?php

class Main extends Controller
{
    /**
     * @var mixed
     */
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Articles');
    }

    public function index()
    {
        $articles = $this->model->getAllArticles();

        $this->view(
            'main/index',
            [
                'articles' => $articles
            ]
        );
    }

    public function read($article_id)
    {
        $readArticle = $this->model->getArticle($article_id);

        $this->view(
            'main/read',
            [
                'readArticle' => $readArticle
            ]
        );
    }
}