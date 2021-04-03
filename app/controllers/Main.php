<?php

class Main extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('main/index');
    }

    public function about()
    {
        $data = [
          'title' => 'about',
          'name' => 'Paweł'
        ];
        $this->view('main/about', $data);
    }
}