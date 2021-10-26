<?php

class Edit_data extends Controller
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

        if (isset($_POST['no_identitas'])) {
            $this->tamuModel->update(
                $no_identitas,
                [
                    'no_identitas' => 'tes',
                    'nama' => 'tes',
                    'alamat' => 'tes',
                    'pekerjaan' => 'tes',
                    'agama' => 'tes',
                    'keperluan' => 'tes',
                    'jenis_kelamin' => 'tes',
                    'no_telepon' => 'tes',
                    'tanggal' => 'tes'
                ]
            );
            die;
            setFlash("Data berhasil ditambahkan.");
            header("Location: " . BASEURL . "/Tabel_data/tamu");
            exit;
        }

        $data = [
            'title' => 'Edit Data Tamu',
            'tamu' => $this->tamuModel->gettamu($no_identitas),
        ];
        $this->view('templates/header', $data);
        $this->view('edit_data/tamu', $data);
        $this->view('templates/footer', $data);
    }
}
