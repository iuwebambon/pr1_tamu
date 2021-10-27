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
                                    <h4>Master Data Tamu</h4>
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
                                    <li class="breadcrumb-item"><a href="#!">Ready To Use</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Clone Elements</a>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- clone elements card start -->
                            <div class="card">
                                <div class="card-header">
                                    <!-- <h5>Master Data Tamu</h5> -->
                                    <!-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> -->
                                    <?php if (isset($err) && $err == 1) { ?>
                                        <div class="col-sm-12 col-md-12 col-xl-12">
                                            <div class="alert alert-danger border-danger">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="icofont icofont-close-line-circled"></i>
                                                </button>
                                                <strong>Gagal!</strong> <code>Terjadi masalah saat mencoba menyimpan data</code>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="card-block">
                                    <div class="wrapper wrapper-640">
                                        <form action="" method="post" class="j-forms" id="j-forms">
                                            <!-- end /.header-->
                                            <div class="content">
                                                <div class="divider-text gap-top-45 gap-bottom-45">
                                                    <span>Data Tamu</span>
                                                </div>
                                                <!-- start cloned link elements -->
                                                <div class="clone-link">
                                                    <div class="toclone">
                                                        <button class=" clone btn btn-primary m-b-15">Tambah tamu</button>
                                                        <button class=" delete  btn btn-danger m-b-15">Hapus tamu ini</button>
                                                        <div class="unit">
                                                            <div class="input">
                                                                <input type="text" required autocomplete="off" name="no_identitas[]" placeholder="no identitas">
                                                            </div>
                                                        </div>
                                                        <div class="j-row">
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <input type="text" required autocomplete="off" name="nama[]" placeholder="nama lengkap">
                                                                </div>
                                                            </div>
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <input type="text" required autocomplete="off" name="alamat[]" placeholder="alamat">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="j-row">
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <input type="text" required autocomplete="off" name="pekerjaan[]" placeholder="pekerjaan">
                                                                </div>
                                                            </div>
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <input type="text" required autocomplete="off" name="agama[]" placeholder="agama">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="j-row">
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <input type="text" required autocomplete="off" name="keperluan[]" placeholder="keperluan">
                                                                </div>
                                                            </div>
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <select required autocomplete="off" name="jenis_kelamin[]">
                                                                        <option value="">jenis kelamin</option>
                                                                        <option value="Laki-laki">Laki-laki</option>
                                                                        <option value="Perempuan">Perempuan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="j-row">
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <input type="text" required autocomplete="off" name="no_telepon[]" placeholder="no telepon">
                                                                </div>
                                                            </div>
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <input type="date" required autocomplete="off" name="tanggal[]" placeholder="tanggal">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end /.toclone -->
                                                </div>
                                                <!-- end cloned link elements -->
                                            </div>
                                            <!-- end /.content -->
                                            <div class="footer">
                                                <button type="submit" class="btn btn-primary m-b-0">Simpan</button>
                                            </div>
                                            <!-- end /.footer -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- clone elements card end -->
                        </div>
                    </div>
                </div>
                <!-- Page body start -->
            </div>
        </div>
        <!-- Main-body end -->

        <div id="styleSelector">

        </div>
    </div>
</div>
</div>