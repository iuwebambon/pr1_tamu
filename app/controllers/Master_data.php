<?php

class Master_data extends Controller
{
    public function __construct()
    {
        isLogin();
    }

    public function index()
    {
        header("Location: " . BASEURL . '/Master_data/tamu');
        exit;
    }

    public function tamu()
    {
        $err = 0;
        if (isset($_POST['no_identitas'][0])) {
            $error = 0;
            for ($i = 0; $i < count($_POST['no_identitas']); $i++) {
                $no_identitas = $_POST['no_identitas'][$i];
                $nama = $_POST['nama'][$i];
                $alamat = $_POST['alamat'][$i];
                $pekerjaan = $_POST['pekerjaan'][$i];
                $agama = $_POST['agama'][$i];
                $keperluan = $_POST['keperluan'][$i];
                $jenis_kelamin = $_POST['jenis_kelamin'][$i];
                $no_telepon = $_POST['no_telepon'][$i];
                $tanggal = $_POST['tanggal'][$i];

                $query = "INSERT INTO `tamu`(`no_identitas`, `nama`, `alamat`, `pekerjaan`, `agama`, `keperluan`, `jenis_kelamin`, `no_telepon`, `tanggal`) VALUES ('$no_identitas','$nama','$alamat','$pekerjaan','$agama','$keperluan','$jenis_kelamin','$no_telepon','$tanggal')";

                $error = mysqli_query(conn(), $query);
            }
            if ($error > 0) {
                setFlash("Berhasil di tambahkan");
                header("Location: " . BASEURL . "/tabel_data/tamu");
            } else {
                $err = 1;
            }
        }

        $data = [
            'title' => 'Master Data Tamu',
            'err'   => $err
        ];
        $this->view('templates/header', $data);
        $this->view('master_data/tamu', $data);
        $this->view('templates/footer',);
    }
}
