<?php

class Detail_data extends Controller
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

    public function tamu($no_identitas)
    {
        $tamu = mysqli_query(conn(), "SELECT * FROM tamu WHERE no_identitas = '$no_identitas'");
        $tamu = mysqli_fetch_assoc($tamu);

        $data = [
            'title' => 'Detail Tamu',
            'tamu' => $tamu,
        ];
        $this->view('templates/header', $data);
        $this->view('detail_data/tamu', $data);
        $this->view('templates/footer', $data);
    }
}
