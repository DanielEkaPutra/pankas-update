<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pankas Website </title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="<?= base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="<?= base_url(); ?>assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/jquery.mCustomScrollbar.css">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css">
  </head>

  <body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
        <?php
          $this->load->view('template/pre-loader-start');
        ?>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">

          <nav class="navbar header-navbar pcoded-header">
            <?php
                $this->load->view('template/navbar');
            ?>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                  <?php
                        $this->load->view('template/navbar-right');
                  ?>
                  </nav>
                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <?php
                        $this->load->view('template/page-header');
                     ?>
                      </div>
                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                    <?php
                                        $this->load->view('user/edit/form');
                                    ?>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Ends -->
    
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="<?= base_url(); ?>assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/SmoothScroll.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="<?= base_url(); ?>assets/pages/widget/amchart/gauge.js"></script>
    <script src="<?= base_url(); ?>assets/pages/widget/amchart/serial.js"></script>
    <script src="<?= base_url(); ?>assets/pages/widget/amchart/light.js"></script>
    <script src="<?= base_url(); ?>assets/pages/widget/amchart/pie.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="<?= base_url(); ?>assets/js/pcoded.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/script.js "></script>
    <script src="<?= base_url()?>assets/sweetalert/sweetalert2.all.min.js"></script>
</body>

</html>
