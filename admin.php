
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Admin Dashboard
  </title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />


  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.min1c51.css?v=2.1.2" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/apexcharts.css">
  <link rel="stylesheet" href="assets/js/plugins/simple-datatables/style.css">
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">

  <div class="wrapper ">
     <!-- include sidebar -->
    <?php  include 'assets/template/sidebar.php'; ?>

    <div class="main-panel">
      <!-- iclude top-nav -->
      <?php include 'assets/template/top-nav.php'; ?>

      <div class="content">
        <div class="content">
          <div class="container-fluid">
            <div class="row">

              <div class="col-12 welcome-user">
                <h3>Hallo, User</h3>
                <p>Selamat datang di halaman admin</p>
              </div>

              <!-- top-card-surat -->
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">mail_outline</i>
                    </div>
                    <p class="card-category">Surat Masuk</p>
                    <h3 class="card-title">14</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">inbox</i>&nbsp;<span>14 Surat Masuk</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- top-card-surat -->

              <!-- top-card-surat -->
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">send</i>
                    </div>
                    <p class="card-category">Surat Keluar</p>
                    <h3 class="card-title">21</h3>
                  </div>
                  <div class="card-footer">
                   <div class="stats">
                    <i class="material-icons">send</i>&nbsp;<span>21 Surat Keluar</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- top-card-surat -->

            <!-- top-card-surat -->
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people_outline</i>
                  </div>
                  <p class="card-category">Jumlah Users</p>
                  <h3 class="card-title">10</h3>
                </div>
                <div class="card-footer">
                 <div class="stats">
                  <i class="material-icons">people_outline</i>&nbsp;<span>10 Jumlah Users</span>
                </div>
              </div>
            </div>
            <!-- top-card-surat -->
          </div>

          <!-- chart data surat perbulan -->
          <div class="col-12">
            <div class="card">
              <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                  <i class="material-icons">bar_chart</i>
                </div>
                <h4 class="card-title title-per-section">
                  Data surat setiap bulan&nbsp;<span>Januari</span>
                </h4>
              </div>
              <div class="card-body">
                <div id="bar"></div>
              </div>
            </div>
          </div>
          <!-- chart data surat perbulan -->

          <!-- include section top 10 disposisi table -->
          <div class="col-lg-6 col-md-6 col-sm-12">
            <?php include 'assets/template/top-10-disposisi-table.php'; ?>
          </div>
          <!-- include section top 10 disposisi table -->

          <!-- include section top 10 surat masuk table -->
          <div class="col-lg-6 col-md-6 col-sm-12">
            <?php include 'assets/template/top-10-surat-masuk-table.php'; ?>
          </div>
          <!-- include section top 10 surat masuk table -->

          <!-- include section tabel-top-status-surat -->
          <div class="col-12">
            <?php include 'assets/template/tabel-top-status-surat.php'; ?>
          </div>
          <!-- include section tabel-top-status-surat -->


        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>


<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap-material-design.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

<!-- Plugin for the momentJs  -->
<script src="assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="assets/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!-- Datatables simple plugin -->
<script src="assets/js/plugins/simple-datatables/simple-datatables.js"></script>
<!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js"></script>  
<!-- Library for adding dinamically elements -->
<script src="assets/js/plugins/arrive.min.js"></script>
<!-- Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<!-- Chart -->
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-dashboard.min1c51.js?v=2.1.2" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>
<script src="assets/demo/ui-set-chart.js"></script>
<script src="assets/demo/ui-set-datatable.js"></script>