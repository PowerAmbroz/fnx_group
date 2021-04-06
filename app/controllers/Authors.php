<?php


class Authors extends Controller
{
    /**
     * @var mixed
     */
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Author');
    }

    public function index()
    {
        $getAllAuthors = $this->model->getAllAuthors();
        $this->view(
            'author/index',
            [
                'getAllAuthors' => $getAllAuthors
            ]
        );
    }

    public function author($id)
    {
        $author = $this->model->getAuthor($id);
        $getArticles = $this->model->getArticlesFromAuthor($id);

        $this->view(
            'author/author',
            [
                'author' => $author,
                'author_articles' => $getArticles
            ]
        );
    }
}