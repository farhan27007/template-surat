<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar disposisi</title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.min1c51.css?v=2.1.2" rel="stylesheet" />
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

            <div class="col-lg-12">
              <section class="section">

                <div class="card">
                  <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                      <i class="material-icons">bookmark_border</i>
                    </div>
                    <h4 class="card-title title-per-section">
                      Daftar disposisi
                    </h4>
                  </div>

                  
                  <div class="card-body">
                    <table class='table table-striped' id="table1">
                      <thead>
                        <tr>
                          <th>Scan surat</th>
                          <th>Tujuan surat</th>
                          <th>Deskripsi disposisi</th>
                          <th>Status surat</th>
                        </tr>
                      </thead>
                      <tbody>
                       <!-- status terkirim -->
                       <?php for ($i=0; $i < 1 ; $i++) { ?>
                        <tr>
                          <td><a href="#">EKD Permohonan Data PNS</a></td>
                          <td>User 1</td>
                          <td>Lorem ipsum dolor sit amet..</td>
                          <td><div class="alert alert-primary">Terkirim</div></td>
                        </tr>                     
                      <?php } ?>
                      <!-- status terkirim -->

                      <!-- status dibaca -->
                      <?php for ($i=0; $i < 1 ; $i++) { ?>
                        <tr>
                          <td><a href="#">EKD Permohonan Data PNS</a></td>
                          <td>User 1</td>
                          <td>Lorem ipsum dolor sit amet..</td>
                          <td><div class="alert alert-success">Dibaca</div></td>
                        </tr>                     
                      <?php } ?>
                      <!-- status dibaca -->
                    </tbody>
                  </table>
                </div>
              </div>
            </section>
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
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-dashboard.min1c51.js?v=2.1.2" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>
<script src="assets/demo/ui-set-datatable.js"></script>
