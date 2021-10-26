<?php

class Detail_data extends Controller
{
    public function __construct()
    {
        $this->tamuModel = $this->model('tamuModel');
    }

    public function index()
    {
        header("Location: " . BASEURL);
        exit;
    }

    public function tamu($no_identitas)
    {
        $data = [
            'title' => 'Detail Tamu',
            'tamu' => $this->tamuModel->gettamu($no_identitas),
        ];
        $this->view('templates/header', $data);
        $this->view('detail_data/tamu', $data);
        $this->view('templates/footer', $data);
    }
}
