<?php

class Main extends Controller
{
    /**
     * @var mixed
     */
    private $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $users = $this->userModel->getUsers();

        $data = [
            'title' => 'Home Page',
            'users' => $users
        ];

        $this->view('main/index', $data);
    }

    public function about()
    {
        $this->view('main/about');
    }
}