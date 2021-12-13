<?php
$iden = $this->db->query("SELECT * FROM tb_web_identitas where id_identitas='1'")->row_array();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title; ?></title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?= base_url('assets/ui/')?>css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url('assets/ui/')?>css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="<?= base_url('assets/ui/')?>css/font-awesome.css" rel="stylesheet" />
  <link href="<?= base_url('assets/ui/')?>css/nucleo-svg.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
  <link rel="stylesheet" href="<?= base_url('assets/template/tema/') ?>vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/template/tema/') ?>css/style.css">

    <link rel="stylesheet" href="<?= base_url('assets/template/tema/') ?>vendor/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/tema/') ?>vendor/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/tema/') ?>vendor/photoswipe/default-skin/default-skin.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/tema/') ?>vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/css/'); ?>sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/adminlte3/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/gijgo/css/gijgo.min.css') ?>">
    <!-- CSS Files -->
  <link href="<?= base_url('assets/ui/')?>css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
  <link rel="icon" type="image/png" href="<?= base_url('assets/images/favicon/') ?><?= $iden['favicon']; ?>">
    <link rel="stylesheet" href="<?= base_url('assets/template/adminlte3/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url('assets/template/gijgo/css/gijgo.min.css') ?>">
    <script src="<?= base_url('assets/template/tema/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/template/js/header.js') ?>"></script>
    <script>
        var site_url = '<?= base_url() ?>';
    </script>
 <style>
        @media only screen and (max-width: 720px) {
            .ileft {
                text-align: right;
            }

            .iright {
                text-align: left;
            }

        }

        .foto-container {
            position: relative;

        }

        .foto-image {
            opacity: 1;
            display: block;
            width: 100%;
            height: 100%;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .foto-middle {
            transition: .5s ease;
            opacity: .3;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .foto-container:hover .foto-image {
            opacity: 0.5;
        }

        .foto-container:hover .foto-middle {
            opacity: 1;
        }

        .select2-container--default .select2-results>.select2-results__options {
            max-height: 400px;
            min-height: 400px;
            overflow-y: auto;
        }
    </style>
 </head>

 <body class="index-page">
 <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
        </div>
    </div>
  <!-- Navbar -->
  <?php include '_include/navbar.php'; ?>

  <!-- End Navbar -->
  <?= $konten; ?>
    
  <!--   Core JS Files   -->
  <?php
        //include '_include/modal2.php';
        if ($this->uri->segment(2) == 'dashboard') {
            include '_include/modal1.php';
        } ?>

        <!-- footer -->
        <?php include '_include/footer.php'; ?>

  
    <?php $this->model_main->kunjungan(); ?>

    <script src="<?= base_url('assets/ui/')?>js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/ui/')?>js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/ui/')?>js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/ui/')?>js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?= base_url('assets/ui/')?>js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url('assets/ui/')?>js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/ui/')?>js/plugins/moment.min.js"></script>
  <script src="<?= base_url('assets/ui/')?>js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/ui/')?>js/plugins/bootstrap-datepicker.min.js"></script>
  <script src="<?= base_url('assets/template/tema/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/template/tema/') ?>vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/template/tema/') ?>vendor/nouislider/nouislider.min.js"></script>
    <script src="<?= base_url('assets/template/tema/') ?>vendor/photoswipe/photoswipe.min.js"></script>
    <script src="<?= base_url('assets/template/tema/') ?>vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="<?= base_url('assets/template/tema/') ?>vendor/select2/js/select2.min.js"></script>
    <script src="<?= base_url('assets/template/tema/') ?>js/number.js"></script>
    <script src="<?= base_url('assets/template/tema/') ?>js/main.js"></script>
    <script src="<?= base_url('assets/template/tema/') ?>js/header.js"></script>
    <script src="<?= base_url('assets/template/tema/') ?>vendor/svg4everybody/svg4everybody.min.js"></script>
    <script src="<?= base_url('assets/template/js/'); ?>sweetalert2.min.js"></script>
    <script src="<?= base_url('assets/template/adminlte3/'); ?>plugins/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets/template/adminlte3/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url('assets/template/gijgo/js/gijgo.min.js') ?>"></script>
    <script src="<?= base_url('assets/template/js/footer.js') ?>"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?= base_url('assets/ui/')?>js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script>
    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
    <script>
        var owl = $('#MainSlider');
        owl.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true
        });
    </script>
</body>

</html>