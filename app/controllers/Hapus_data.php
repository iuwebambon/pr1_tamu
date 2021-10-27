<?php

class Master_data extends Controller
{
    public function __construct()
    {
        isLogin();
    }
    public function index()
    {
        header("Location: " . BASEURL);
        exit;
    }

    public function tamu()
    {
    }
}
