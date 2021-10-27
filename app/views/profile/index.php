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
                                    <h4>Profil Pengguna</h4>
                                    <!-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page-body start -->
                <div class="page-body">
                    <!--profile cover start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cover-profile">
                                <div class="profile-bg-img">
                                    <img class="profile-bg-img img-fluid" src="<?= BASEURL; ?>\files\assets\images\user-profile\bg-img1.jpg" alt="bg-img">
                                    <div class="card-block user-info">
                                        <div class="col-md-12">
                                            <div class="media-left">
                                                <a href="#" class="profile-image">
                                                    <img width="105px" height="105px" class="user-img img-radius" src="<?= BASEURL; ?>\files\pribadi\images\profile\<?= user()['foto']; ?>" alt="user-img">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--profile cover end-->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- tab header start -->
                            <div class="tab-header card">
                                <?php if ($error > 0) : ?>
                                    <div class="alert alert-info background-warning">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled text-white"></i>
                                        </button>
                                        <strong>Gagal!</strong> Upload File <code> format yang diijinkan hanya (jpg dan jpeg)</code>
                                    </div>
                                <?php endif; ?>
                                <?php if (flash() > 0) : ?>
                                    <div class="alert alert-info background-info">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <i class="icofont icofont-close-line-circled text-white"></i>
                                        </button>
                                        <strong>Success!</strong> Data Profil <code> berhasil diubah</code>
                                    </div>
                                <?php endif; ?>
                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#detailprofile" role="tab">Detail Profil</a>
                                        <div class="slide"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#editprofile" role="tab">Edit Profil</a>
                                        <div class="slide"></div>
                                    </li>
                                </ul>
                            </div>
                            <!-- tab header end -->
                            <!-- tab content start -->
                            <div class="tab-content">
                                <!-- tab panel personal start -->
                                <div class="tab-pane active" id="detailprofile" role="tabpanel">
                                    <!-- personal card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-header-text">About Me</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="view-info">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="general-info">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-xl-12">
                                                                    <div class="table-responsive">
                                                                        <table class="table m-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">Nama Lengkap</th>
                                                                                    <td><?= user()['fullname']; ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Username</th>
                                                                                    <td><?= user()['username']; ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Password</th>
                                                                                    <td><?= user()['password']; ?></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end of row -->
                                                        </div>
                                                        <!-- end of general info -->
                                                    </div>
                                                    <!-- end of col-lg-12 -->
                                                </div>
                                                <!-- end of row -->
                                            </div>
                                        </div>
                                        <!-- end of card-block -->
                                    </div>
                                    <!-- personal card end-->
                                </div>
                                <!-- tab pane personal end -->
                                <!-- tab pane info start -->
                                <div class="tab-pane" id="editprofile" role="tabpanel">
                                    <!-- info card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-header-text">Ubah Data</h5>
                                        </div>
                                        <div class="card-block">
                                            <!-- end of view-info -->
                                            <div class="edit-info">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="general-info">
                                                            <form action="" method="POST" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="icofont icofont-user"></i></span>
                                                                                            <input type="text" name="fullname" class="form-control" required autocomplete="off" placeholder="Nama Lengkap">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                                                                            <input type="text" name="username" class="form-control" required autocomplete="off" placeholder="Username">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                                                                            <input type="text" name="password" class="form-control" required autocomplete="off" placeholder="Password">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                                                                            <input type="file" name="foto" required autocomplete="off" class="form-control">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <!-- end of row -->
                                                                <div class="text-center">
                                                                    <button type="submit" name="simpan" class="btn btn-primary waves-effect waves-light m-r-20">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- end of edit info -->
                                                    </div>
                                                    <!-- end of col-lg-12 -->
                                                </div>
                                                <!-- end of row -->
                                            </div>
                                            <!-- end of edit-info -->
                                        </div>
                                    </div>
                                    <!-- info card end -->
                                </div>
                                <!-- tab pane info end -->
                            </div>
                            <!-- tab content end -->
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main body end -->
        <div id="styleSelector">

        </div>
    </div>
</div>
</div>