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
                                    <h4>Detail Tamu</h4>
                                    <!-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Bootstrap Table</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Basic Initialization</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page-body start -->
                <div class="page-body">
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
                                        <a href="<?= BASEURL; ?>/tabel_data/tamu">
                                            <button class="btn btn-danger mt-3"><i class="fa fa-mail-reply"></i> Kembali</button>
                                        </a>
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <tbody>
                                                <tr>
                                                    <td>No Identitas</td>
                                                    <td><?= $tamu['no_identitas']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td><?= $tamu['nama']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td><?= $tamu['alamat']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Pekerjaan</td>
                                                    <td><?= $tamu['pekerjaan']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Agama</td>
                                                    <td><?= $tamu['agama']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Keperluan</td>
                                                    <td><?= $tamu['keperluan']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td><?= $tamu['jenis_kelamin']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No Telepon</td>
                                                    <td><?= $tamu['no_telepon']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal</td>
                                                    <td><?= $tamu['tanggal']; ?></td>
                                                </tr>
                                            </tbody>
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