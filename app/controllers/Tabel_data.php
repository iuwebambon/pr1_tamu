<?php

class Tabel_data extends Controller
{

    public function __construct()
    {
        isLogin();
    }

    public function index()
    {
        header("Location: " . BASEURL . "/Tabel_data/tamu");
        exit;
    }

    public function tamu()
    {
        $tamu = mysqli_query(conn(), "SELECT * FROM tamu");
        // $tamu = mysqli_fetch_assoc($tamu);

        $data = [
            'title' => 'Table Tamu',
            'tamu' => $tamu
        ];
        $this->view('templates/header', $data);
        $this->view('tabel_data/tamu', $data);
        $this->view('templates/footer', $data);
    }

    public function cetak_data_tamu($key = false)
    {
        if ($key != false) {
            $tamu = mysqli_query(conn(), "SELECT * FROM tamu WHERE no_identitas LIKE '%$key%' OR nama LIKE '%$key%' OR jenis_kelamin LIKE '%$key%' OR agama LIKE '%$key%'");
        } else {
            $tamu = mysqli_query(conn(), "SELECT * FROM tamu");
        }

        $data = [
            'title' => 'Cetak Data Tamu',
            'tamu'  => $tamu
        ];
        $this->view('tabel_data/cetak_data_tamu', $data);
    }

    public function hapus($id)
    {
        mysqli_query(conn(), "DELETE FROM `tamu` WHERE `no_identitas` = '$id'");
        setFlash("Berhasil dihapus");
        header("Location: " . BASEURL . "/Tabel_data/tamu");
        exit;
    }
}
