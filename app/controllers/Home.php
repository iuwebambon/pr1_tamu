<?php

class Home extends Controller
{
    public function __construct()
    {
        isLogin();
    }
    public function index()
    {

        $al = mysqli_query(conn(), "SELECT * FROM tamu");
        $al = mysqli_num_rows($al);
        $ll = mysqli_query(conn(), "SELECT * FROM tamu WHERE jenis_kelamin = 'Laki-laki'");
        $ll = mysqli_num_rows($ll);
        $pp = mysqli_query(conn(), "SELECT * FROM tamu WHERE jenis_kelamin = 'Perempuan'");
        $pp = mysqli_num_rows($pp);
        $us = mysqli_query(conn(), "SELECT * FROM users");
        $us = mysqli_num_rows($us);

        $data = [
            'title' => 'Dashboard Tamu',
            'll'    => $ll,
            'pp'    => $pp,
            'al'    => $al,
            'us'    => $us
        ];
        $this->view('templates/header', $data);
        $this->view('index', $data);
        $this->view('templates/footer', $data);
    }
}
