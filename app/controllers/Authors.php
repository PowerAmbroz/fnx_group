<?php


class Authors extends Controller
{
    /**
     * @var mixed
     */
    private $authorModel;

    public function __construct()
    {
        $this->authorModel = $this->model('Author');
    }

    public function index(): array
    {
        $getAllAuthors = $this->authorModel->getAllAuthors();
        $this->view(
            'author/index',
            [
                'getAllAuthors' => $getAllAuthors
            ]
        );
    }

    public function author(int $id): array
    {
        $author = $this->authorModel->getAuthor($id);
        $getArticles = $this->authorModel->getArticlesFromAuthor($id);

        $this->view(
            'author/author',
            [
                'author' => $author,
                'author_articles' => $getArticles
            ]
        );
    }
}