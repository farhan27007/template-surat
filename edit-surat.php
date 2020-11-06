<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit surat</title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.min1c51.css?v=2.1.2" rel="stylesheet" />
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
                  <div class="card-header card-header-icon card-header-info">
                    <div class="card-icon">
                      <i class="material-icons">edit</i>
                    </div>
                    <h4 class="card-title title-per-section">
                      Edit surat
                    </h4>
                  </div>

                  <div class="card-header">
                    <div class="row">
                    </div>

                    <div class="card-body">

                      <form method="#" action="#">
                        <div class="row mt-4">

                          <div class="form-group col-12">
                            <label for="agendaform" class="bmd-label-floating">Nomor agenda..</label>
                            <input type="number" class="form-control" id="agendaform">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 mb-2">
                            <label for="j_suratform" class="bmd-label-floating">Jenis surat...</label>
                            <input type="text" class="form-control" id="j_suratform">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 mb-2">
                            <label for="tahunform" class="bmd-label-floating">Tahun...</label>
                            <input type="number" class="form-control" id="tahunform">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 mb-2">
                            <label for="nosuratform" class="bmd-label-floating">Nomor surat...</label>
                            <input type="text" class="form-control" id="nosuratform">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 mb-2">
                            <input type="text" class="form-control datepicker" placeholder="Tanggal surat...">
                          </div>

                          <div class="form-group col-12 mb-2">
                            <label for="perihalform" class="bmd-label-floating">Perihal...</label>
                            <input type="text" class="form-control" id="perihalform">
                          </div>

                          <div class="form-group col-12 mb-2">
                            <label for="suratdariform" class="bmd-label-floating">Surat dari...</label>
                            <input type="text" class="form-control" id="suratdariform">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 mb-2">
                            <label for="isi_disposisi" class="bmd-label-floating">Isi disposisi...</label>
                            <input type="text" class="form-control" id="isi_disposisi">
                          </div>

                          <div class="form-group col-lg-6 col-md-6 mb-2">
                            <select class="selectpicker" data-style="select-with-transition" multiple title="Diteruskan kepada..." data-size="7">
                              <option disabled>Diteruskan kepada...</option>
                              <option value="1">User 1</option>
                              <option value="2">User 2</option>
                              <option value="3">User 3</option>
                            </select>
                          </div>

                          <!-- button upload berkas scan surat -->
                          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                              <p class="mb-0"><i class="material-icons">attach_file</i></p>
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                              <span class="btn btn-rose btn-file">
                                <span class="fileinput-new">Unggah berkas scan surat</span>
                                <span class="fileinput-exists">Ganti berkas</span>
                                <input type="file" name="..." />
                              </span>
                              <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i>Batalkan</a>
                            </div>
                          </div>               
                          <!-- button upload berkas scan surat -->

                          <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-success float-right">
                              <i class="material-icons">save</i>&nbsp;
                              <span>Simpan</span>
                            </button>
                          </div>

                        </div>
                      </form>

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
  <script src="assets/demo/set-picker.js"></script>