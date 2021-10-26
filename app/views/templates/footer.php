</div>
</div>
</div>
</div>

<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?= BASEURL; ?>/files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?= BASEURL; ?>/files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?= BASEURL; ?>/files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?= BASEURL; ?>/files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?= BASEURL; ?>/files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="<?= BASEURL; ?>\files\bower_components\jquery\js\jquery.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>\files\bower_components\popper.js\js\popper.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
<!-- j-pro js -->
<script type="text/javascript" src="<?= BASEURL; ?>\files\assets\pages\j-pro\js\jquery.ui.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>\files\assets\pages\j-pro\js\jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>\files\assets\pages\j-pro\js\jquery-cloneya.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?= BASEURL; ?>\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?= BASEURL; ?>\files\bower_components\modernizr\js\modernizr.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>\files\bower_components\modernizr\js\css-scrollbars.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="<?= BASEURL; ?>\files\bower_components\chart.js\js\Chart.js"></script>
<!-- data-table js -->
<script src="<?= BASEURL; ?>\files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
<script src="<?= BASEURL; ?>\files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
<script src="<?= BASEURL; ?>\files\assets\pages\data-table\js\jszip.min.js"></script>
<script src="<?= BASEURL; ?>\files\assets\pages\data-table\js\pdfmake.min.js"></script>
<script src="<?= BASEURL; ?>\files\assets\pages\data-table\js\vfs_fonts.js"></script>
<script src="<?= BASEURL; ?>\files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
<script src="<?= BASEURL; ?>\files\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
<script src="<?= BASEURL; ?>\files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
<script src="<?= BASEURL; ?>\files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
<script src="<?= BASEURL; ?>\files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="<?= BASEURL; ?>\files\bower_components\i18next\js\i18next.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
<!-- amchart js -->
<script src="<?= BASEURL; ?>\files\assets\pages\widget\amchart\amcharts.js"></script>
<script src="<?= BASEURL; ?>\files\assets\pages\widget\amchart\serial.js"></script>
<script src="<?= BASEURL; ?>\files\assets\pages\widget\amchart\light.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?= BASEURL; ?>\files\assets\pages\j-pro\js\custom\cloned-form.js"></script>
<script src="<?= BASEURL; ?>\files\assets\pages\data-table\js\data-table-custom.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>\files\assets\js\SmoothScroll.js"></script>
<script src="<?= BASEURL; ?>\files\assets\js\pcoded.min.js"></script>
<script src="<?= BASEURL; ?>\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= BASEURL; ?>\files\assets\js\vartical-layout.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>\files\assets\pages\dashboard\analytic-dashboard.min.js"></script>
<script type="text/javascript" src="<?= BASEURL; ?>\files\assets\js\script.js"></script>
<?php if (isset($_session['pesan'])) unset($_session['pesan']); ?>
<!-- <script src="<?= BASEURL; ?>/files/pribadi/js/klik_kanan.js"></script> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>

</html>