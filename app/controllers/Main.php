<?php

class Main extends Controller
{
    /**
     * @var mixed
     */
    private $articleModel;

    public function __construct()
    {
        $this->articleModel = $this->model('Article');
    }

    public function index(): array
    {
        $articles = $this->articleModel->getAllArticles();

        $this->view(
            'main/index',
            [
                'articles' => $articles
            ]
        );
    }

    public function read(int $article_id): array
    {
        $readArticle = $this->articleModel->getArticle($article_id);

        $this->view(
            'main/read',
            [
                'readArticle' => $readArticle
            ]
        );
    }
}