<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css" media="print">
        @media print {
            .tombol {
                display: none;
            }
        }

        @page {
            margin-top: 30px;
            margin-bottom: 30px;
        }
    </style>
    <title><?= $title; ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\assets\icon\font-awesome\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/files/pribadi/css/cetak_data_tamu.css">
</head>

<body>
    <div class="tombol">
        <a href="<?= BASEURL; ?>/Tabel_data/tamu">
            <button class="kembali"><i class="fa fa-mail-reply"></i> Kembali</button>
        </a>
        <button class="cetak" onclick="print()"><i class="fa fa-print"></i> Cetak</button>
    </div>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="<?= BASEURL; ?>/files/pribadi/images/logo_pancita.png" alt="Logo Pancita">
            </div>
            <div class="title">
                <div class="atas">
                    BADAN ARSIP DAN PERPUSTAKAAN PROVINSI ACEH
                </div>
                <div class="bawah">
                    Jl.T.NyakAriefLamgugob Banda Aceh
                </div>
            </div>
        </div>
        <hr>
        <div class="judul">Laporan Data Tamu</div>
        <div class="tanggal">Tanggal : <?= date("d/m/Y"); ?></div>
        <table>
            <tr>
                <th>No Identitas</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Agama</th>
                <th>Asal Kantor</th>
                <th>Jabatan</th>
                <th>Jenis Kelamin</th>
                <th>Keperluan</th>
                <th>Tanggal</th>
                <th>No Telepon</th>
                <th>Paraf</th>
            </tr>
            <?php foreach ($tamu as $t) : ?>
                <tr>
                    <td><?= $t['no_identitas']; ?></td>
                    <td><?= $t['nama']; ?></td>
                    <td><?= $t['alamat']; ?></td>
                    <td><?= $t['pekerjaan']; ?></td>
                    <td><?= $t['agama']; ?></td>
                    <td><?= $t['asal_kantor']; ?></td>
                    <td><?= $t['jabatan']; ?></td>
                    <td><?= $t['jenis_kelamin']; ?></td>
                    <td><?= $t['keperluan']; ?></td>
                    <td><?= $t['tanggal']; ?></td>
                    <td><?= $t['no_telepon']; ?></td>
                    <td>
                        <a href="<?= BASEURL; ?>/files/pribadi/images/paraf/<?= $t['paraf']; ?>" target="_blank">
                            <img src="<?= BASEURL; ?>/files/pribadi/images/paraf/<?= $t['paraf']; ?>" height="46px" width="168px">
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <script>
        print();
    </script>
    <script src="<?= BASEURL; ?>/files/pribadi/js/klik_kanan.js"></script>
</body>

</html>