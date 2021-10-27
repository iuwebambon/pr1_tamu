<?php

class Home extends Controller
{
    public function __construct()
    {
        isLogin();
    }
    public function index()
    {
        $data = [
            'title' => 'Tamu',
        ];
        $this->view('templates/header', $data);
        $this->view('index', $data);
        $this->view('templates/footer', $data);
    }
}
