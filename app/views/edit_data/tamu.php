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
                                    <h4>Edit Data Tamu</h4>
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

                                </div>
                                <div class="card-block">
                                    <div class="wrapper wrapper-640">
                                        <form action="" method="post" class="j-forms" id="j-forms" novalidate="">
                                            <!-- end /.header-->
                                            <div class="content">
                                                <div class="divider-text gap-top-45 gap-bottom-45">
                                                    <span>Edit Data Tamu</span>
                                                </div>
                                                <!-- start cloned link elements -->
                                                <div class="clone-link">
                                                    <div class="toclone">
                                                        <div class="unit">
                                                            <div class="input">
                                                                <li>harus diisi !!!</li>
                                                                <input type="text" required autofocus="off" name="no_identitas" value="<?= $tamu['no_identitas']; ?>" placeholder="no identitas">
                                                            </div>
                                                        </div>
                                                        <div class="j-row">
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <li>harus diisi !!!</li>
                                                                    <input type="text" required autofocus="off" name="nama" value="<?= $tamu['nama']; ?>" placeholder="nama lengkap">
                                                                </div>
                                                            </div>
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <li>harus diisi !!!</li>
                                                                    <input type="text" required autofocus="off" name="alamat" value="<?= $tamu['alamat']; ?>" placeholder="alamat">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="j-row">
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <li>harus diisi !!!</li>
                                                                    <input type="text" required autofocus="off" name="pekerjaan" value="<?= $tamu['pekerjaan']; ?>" placeholder="pekerjaan">
                                                                </div>
                                                            </div>
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <li>harus diisi !!!</li>
                                                                    <input type="text" required autofocus="off" name="agama" value="<?= $tamu['agama']; ?>" placeholder="agama">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="j-row">
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <li>harus diisi !!!</li>
                                                                    <input type="text" required autofocus="off" name="asal_kantor" value="<?= $tamu['asal_kantor']; ?>" placeholder="asal_kantor">
                                                                </div>
                                                            </div>
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <li>harus diisi !!!</li>
                                                                    <input type="text" required autofocus="off" name="jabatan" value="<?= $tamu['jabatan']; ?>" placeholder="jabatan">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="j-row">
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <li>harus diisi !!!</li>
                                                                    <input type="text" required autofocus="off" name="keperluan" value="<?= $tamu['keperluan']; ?>" placeholder="keperluan">
                                                                </div>
                                                            </div>
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <li>harus diisi !!!</li>
                                                                    <select required autofocus="off" name="jenis_kelamin">
                                                                        <option <?php if ($tamu['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?> value="Laki-laki">Laki-laki</option>
                                                                        <option <?php if ($tamu['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?> value="Perempuan">Perempuan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="j-row">
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <li>harus diisi !!!</li>
                                                                    <input type="text" required autofocus="off" name="no_telepon" value="<?= $tamu['no_telepon']; ?>" placeholder="no telepon">
                                                                </div>
                                                            </div>
                                                            <div class="span6 unit">
                                                                <div class="input">
                                                                    <li>harus diisi !!!</li>
                                                                    <input class="form-control" type="date" required autofocus="off" name="tanggal" value="<?= $tamu['tanggal']; ?>" placeholder="tanggal">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="signature-pad" class="unit">
                                                            <div class="input">
                                                                <li>boleh dikosongkan !!!</li>
                                                                <input type="text" id="paraf" name="paraf" placeholder="paraf" readonly>
                                                                <canvas class="form-control"></canvas>
                                                            </div>
                                                            <div>
                                                                <button type="button" class="button" data-action="clear">Clear</button>
                                                                <button type="button" class="button" data-action="undo">Undo</button>
                                                                <button type="button" class="button" data-action="save-png">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end /.toclone -->
                                                </div>
                                                <!-- end cloned link elements -->
                                            </div>
                                            <!-- end /.content -->
                                            <div class="footer">
                                                <button type="submit" class="btn btn-primary ml-2 m-b-0">Simpan</button>
                                                <a href="<?= BASEURL; ?>/Tabel_data/tamu">
                                                    <button type="button" class="btn btn-danger m-b-0"><i class="fa fa-mail-reply"></i> Kembali</button>
                                                </a>
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