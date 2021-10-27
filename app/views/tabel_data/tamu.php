<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h4>Tabel Tamu</h4>
                                    <!-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a id="tombol_cetak" href="<?= BASEURL; ?>/Tabel_data/cetak_data_tamu">
                                            <button class="btn btn-primary"><i class="fa fa-print "></i> Cetak Data</button>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page-body start -->
                <div class="page-body">
                    <?php if (isset($_SESSION['pesan'])) : ?>
                        <div class="col-sm-12 col-md-12 col-xl-12">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled"></i>
                                </button>
                                <strong>Success!</strong> Data tamu <code> <?= flash(); ?></code>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h5>Zero Configuration</h5>
                                    <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span>

                                </div> -->
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Nomor Identitas</th>
                                                    <th>Nama</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Agama</th>
                                                    <th><i class="fa fa-cog"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tamu as $t) : ?>
                                                    <tr>
                                                        <td><?= $t['no_identitas']; ?></td>
                                                        <td><?= $t['nama']; ?></td>
                                                        <td><?= $t['jenis_kelamin']; ?></td>
                                                        <td><?= $t['agama']; ?></td>
                                                        <td>
                                                            <a href="<?= BASEURL; ?>/Detail_data/tamu/<?= $t['no_identitas']; ?>">
                                                                <button class="btn btn-success btn-icon"><i class="icofont icofont-eye-alt"></i></button>
                                                            </a>
                                                            <a href="<?= BASEURL; ?>/Edit_data/tamu/<?= $t['no_identitas']; ?>">
                                                                <button class="btn btn-warning btn-icon"><i class="fa fa-edit"></i></button>
                                                            </a>
                                                            <a href="<?= BASEURL; ?>/Tabel_data/hapus/<?= $t['no_identitas']; ?>">
                                                                <button class="btn btn-danger btn-icon"><i class="fa fa-trash"></i></button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Nomor Identitas</th>
                                                    <th>Nama</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Agama</th>
                                                    <th><i class="fa fa-cog"></i></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Zero config.table end -->
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->
        <div id="styleSelector">

        </div>
    </div>
</div>
<!-- untuk tangkap isi kolom search -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#simpletable').on('search.dt', function() {
            var value = $('.dataTables_filter input').val();
            $("#tombol_cetak").attr("href", "<?= BASEURL; ?>/Tabel_data/cetak_data_tamu/" + value);
        });
    });
</script>