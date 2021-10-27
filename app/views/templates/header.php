<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= BASEURL; ?>\files\pribadi\images\logo.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\assets\icon\themify-icons\themify-icons.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\assets\icon\feather\css\feather.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\assets\icon\font-awesome\css\font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\assets\icon\icofont\css\icofont.css">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\assets\icon\themify-icons\themify-icons.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\assets\pages\j-pro\css\demo.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\assets\pages\j-pro\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\assets\pages\j-pro\css\j-forms.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>\files\assets\css\jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="<?= BASEURL; ?>">
                            <img style="margin-left: 100%;" width="60px" height="60px" class="img-fluid" src="<?= BASEURL; ?>\files\pribadi\images\logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <!-- <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li> -->
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= BASEURL; ?>\files\pribadi\images\profile\<?= user()['foto']; ?>" class="img-radius" alt="User-Profile-Image">
                                        <span><?= user()['fullname']; ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="<?= BASEURL; ?>/Profile">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= BASEURL; ?>/login/off">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <?php include "chat.php"; ?>
            <!-- Sidebar inner chat start-->
            <?php include "inner_chat.php"; ?>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include "sidebar.php"; ?>