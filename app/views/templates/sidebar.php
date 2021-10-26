<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            <div class="pcoded-navigatio-lavel">Dashboard</div>
            <li class="">
                <a href="<?= BASEURL; ?>">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>
            <div class="pcoded-navigatio-lavel">Master Data</div>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-export"></i></span>
                    <span class="pcoded-mtext">Master Data</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="<?= BASEURL; ?>/Master_data/tamu">
                            <span class="pcoded-mtext">Tamu</span>
                        </a>
                    </li>
                </ul>
            </li>
            <div class="pcoded-navigatio-lavel">Tabel Data</div>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa fa-table"></i></span>
                    <span class="pcoded-mtext">Tabel Data</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="<?= BASEURL; ?>/Tabel_data/tamu">
                            <span class="pcoded-mtext">Tamu</span>
                        </a>
                    </li>
                </ul>
            </li>
            </li>
        </ul>
    </div>
</nav>