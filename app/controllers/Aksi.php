<?php

class Aksi extends Controller
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

    public function simpan_data_tamu()
    {
        if (isset($_POST['simpan'])) {
            extract($_POST);
            if (!empty($no_identitas) || !empty($nama) || !empty($alamat) || !empty($pekerjaan) || !empty($agama) || !empty($keperluan) || !empty($jenis_kelamin) || !empty($no_telepon) || !empty($tanggal)) {
                $this->tamuModel->save([
                    "no_identitas" => $no_identitas,
                    "nama"         => $nama,
                    "alamat"       => $alamat,
                    "pekerjaan"       => $pekerjaan,
                    "agama"       => $agama,
                    "keperluan"       => $keperluan,
                    "jenis_kelamin"       => $jenis_kelamin,
                    "no_telepon"       => $no_telepon,
                    "tanggal"       => $tanggal,
                ]);
            } else {
                $_SESSION['pesan'] = true;
                header("Location: " . BASEURL . "/Master_data/tamu");
                exit;
            }
        } else {
            header("Location: " . BASEURL . "/Tabel_data/tamu");
            exit;
        }
    }
}
