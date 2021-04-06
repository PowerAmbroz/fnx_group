<?php


class Categories extends Controller
{
    /**
     * @var mixed
     */
    private $model;

    public function __construct()
    {
        $this->model = $this->model('Category');
    }

    public function index()
    {
        $getAllCategories = $this->model->getAllCategories();
        echo 'category';
//        var_dump($getAllCategories);die;
        $this->view(
            'categories/index',
            [
                'getAllCategories' => $getAllCategories
            ]
        );
    }

    public function articles($category_id)
    {
        $getArticlesRelated = $this->model->getArticlesRelated($category_id);

        $this->view(
            'categories/articles',
            [
                'getArticlesRelated' => $getArticlesRelated
            ]
        );
    }
}