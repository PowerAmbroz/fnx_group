<?php


class Categories extends Controller
{
    /**
     * @var mixed
     */
    private $categoriesModel;

    public function __construct()
    {
        $this->categoriesModel = $this->model('Category');
    }

    public function index(): array
    {
        $getAllCategories = $this->categoriesModel->getAllCategories();
        $this->view(
            'categories/index',
            [
                'getAllCategories' => $getAllCategories
            ]
        );
    }

    public function articles(int $category_id): array
    {
        $getArticlesRelated = $this->categoriesModel->getArticlesRelated($category_id);

        $this->view(
            'categories/articles',
            [
                'getArticlesRelated' => $getArticlesRelated
            ]
        );
    }
}