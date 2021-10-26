<?php

class Tabel_data extends Controller
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

    public function tamu()
    {
        $data = [
            'title' => 'Table Tamu',
            'tamu' => $this->tamuModel->findAll(),
        ];
        $this->view('templates/header', $data);
        $this->view('tabel_data/tamu', $data);
        $this->view('templates/footer', $data);
    }

    public function cetak_data_tamu($key = false)
    {
        if ($key != false) {
            $val = $this->tamuModel->like([
                'nama' => $key,
                'alamat' => $key,
                'pekerjaan' => $key,
                'agama' => $key,
                'jenis_kelamin' => $key,
                'keperluan' => $key,
                'tanggal' => $key,
                'no_telepon' => $key
            ])->findAll();
        } else {
            $val = $this->tamuModel->gettamu();
        }
        $data = [
            'title' => 'Cetak Data Tamu',
            'tamu' => $val
        ];
        $this->view('tabel_data/cetak_data_tamu', $data);
    }
}
