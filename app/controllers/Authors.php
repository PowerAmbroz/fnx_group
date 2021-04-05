<?php


class Authors extends Controller
{
    public function index($id)
    {
        $model = $this->model('Author');

        $author = $model->getAuthor($id);

        $getArticles = $model->getArticlesFromAuthor($id);

//        var_dump($getArticles);

        $this->view('author/author', [
            'author' => $author,
            'author_articles' => $getArticles
        ]);
    }
}