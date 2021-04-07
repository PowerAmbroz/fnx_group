<?php


class Articles extends Controller
{
    /**
     * @var mixed
     */
    private $articleModel;
    /**
     * @var mixed
     */
    private $userModel;

    public function __construct()
    {
        $this->articleModel = $this->model('Article');
        $this->userModel = $this->model('User');
    }

    public function buy(int $article_id)
    {
        $user_id = $_SESSION['user_id'];
        $possession = $this->checkArticlePossession($article_id, $user_id);
        if ($possession === false) {
            $user_wallet = $this->model('User')->getWallet($user_id);

            $getArticle = $this->articleModel->getArticle($article_id);

            $articleCost = $getArticle[0]->price;

            $bought = $this->articleModel->setArticleBought($article_id, $user_id);

            if ($bought === true) {
                $calculate = $user_wallet->wallet - $articleCost;
                $_SESSION['wallet'] = $calculate;

                $this->userModel->updateUserWallet($user_id, $calculate);

                $_SESSION['success_response'] = 'Your Article has been successfully bought';
                header('location:' . URLROOT);
            } else {
                $_SESSION['error_response'] = 'Something went wrong with the bought. Please try again later';
                header('location:' . URLROOT);
            }
        } else {
            $_SESSION['error_response'] = 'You Possess this Article';
            header('location:' . URLROOT);
        }
    }

    public function checkArticlePossession(int $article_id, int $user_id): bool
    {
        return $this->articleModel->checkArticle($article_id, $user_id);
    }
}