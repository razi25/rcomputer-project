<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>/template/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>/template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>/template/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/template/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?= $this->include('layout/Navbar'); ?>
    <?= $this->renderSection('content'); ?>



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>R - COMPUTER</span> <?= date('Y'); ?></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->

    <script src="<?= base_url() ?>/template/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/vendor/chart.js/chart.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url() ?>/template/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url() ?>/template/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>/template/assets/js/main.js"></script>
    <script src="<?= base_url() ?>/js/jquery-1.10.2.min.js"></script>
    <script src="<?= base_url() ?>/js/jquery.chained.min.js"></script>
    <script>
        $("#subkategori").chained("#kategori");
        $("#editsubkategori").chained("#editkategori");
    </script>
    <script type="text/javascript">
        var rupiah1 = document.getElementById("rupiah1");
        rupiah1.addEventListener("keyup", function(e) {
            rupiah1.value = convertRupiah(this.value);
        });
        rupiah1.addEventListener('keydown', function(event) {
            return isNumberKey(event);
        });
        var rupiah2 = document.getElementById("rupiah2");
        rupiah2.addEventListener("keyup", function(e) {
            rupiah2.value = convertRupiah(this.value);
        });
        rupiah2.addEventListener('keydown', function(event) {
            return isNumberKey(event);
        });
        var total = document.getElementById("total");
        total.addEventListener("keyup", function(e) {
            total.value = convertRupiah(this.value);
        });
        total.addEventListener('keydown', function(event) {
            return isNumberKey(event);
        });
        var biaya = document.getElementById("biaya");
        biaya.addEventListener("keyup", function(e) {
            biaya.value = convertRupiah(this.value);
        });
        biaya.addEventListener('keydown', function(event) {
            return isNumberKey(event);
        });


        function convertRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, "").toString(),
                split = number_string.split(","),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? "." : "";
                rupiah += separator + ribuan.join(".");
            }

            rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
            return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
        }

        function isNumberKey(evt) {
            key = evt.which || evt.keyCode;
            if (key != 188 // Comma
                &&
                key != 8 // Backspace
                &&
                key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
                &&
                (key < 48 || key > 57) // Non digit
            ) {
                evt.preventDefault();
                return;
            }
        }
    </script>
</body>

</html>