<?php

class Master_data extends Controller
{
    public function __construct()
    {
        $this->tamuModel = $this->model('tamuModel');
        $this->tesModel = $this->model('tesModel');
        // $this->tamuActionModel = $this->model('tamuActionModel');
    }

    public function index()
    {
        header("Location: " . BASEURL);
        exit;
    }

    public function tamu()
    {
        // if (isset($_POST['no_identitas'][0])) {
        //     for ($i = 0; $i < count($_POST['no_identitas']); $i++) {
        //         $this->tamuActionModel->save(
        //             $_POST['no_identitas'][$i],
        //             $_POST['nama'][$i],
        //             $_POST['alamat'][$i],
        //             $_POST['pekerjaan'][$i],
        //             $_POST['agama'][$i],
        //             $_POST['keperluan'][$i],
        //             $_POST['jenis_kelamin'][$i],
        //             $_POST['no_telepon'][$i],
        //             $_POST['tanggal'][$i],
        //         );
        //     }
        //     setFlash("Data berhasil ditambahkan.");
        //     header("Location: " . BASEURL . "/Tabel_data/tamu");
        //     exit;
        // }

        $data = [
            'title' => 'Master Data Tamu',
            'error' => isset($error) ? $error : false,
        ];
        $this->view('templates/header', $data);
        $this->view('master_data/tamu', $data);
        $this->view('templates/footer', $data);
    }
}
