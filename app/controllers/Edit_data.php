<?php

class Edit_data extends Controller
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

    public function tamu($id)
    {

        // jika tombol simpan di tekan maka simpan data
        if (isset($_POST['no_identitas'])) {
            $error = 0;
            $no_identitas = $_POST['no_identitas'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $pekerjaan = $_POST['pekerjaan'];
            $agama = $_POST['agama'];
            $keperluan = $_POST['keperluan'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $no_telepon = $_POST['no_telepon'];
            $tanggal = $_POST['tanggal'];

            $query = "UPDATE `tamu` SET `no_identitas`='$no_identitas',`nama`='$nama',`alamat`='$alamat',`pekerjaan`='$pekerjaan',`agama`='$agama',`keperluan`='$keperluan',`jenis_kelamin`='$jenis_kelamin',`no_telepon`='$no_telepon',`tanggal`='$tanggal' WHERE `no_identitas` = '$id'";

            $error = mysqli_query(conn(), $query);

            if ($error > 0) {
                setFlash("Berhasil di ubah");
                header("Location: " . BASEURL . "/tabel_data/tamu");
            } else {
                $err = 1;
            }
        }

        // tampilkan data
        $tamu = mysqli_query(conn(), "SELECT * FROM tamu WHERE no_identitas = '$id'");
        $tamu = mysqli_fetch_assoc($tamu);

        $data = [
            'title' => 'Edit Data Tamu',
            'tamu' => $tamu,
        ];
        $this->view('templates/header', $data);
        $this->view('edit_data/tamu', $data);
        $this->view('templates/footer', $data);
    }
}
