<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar surat keluar</title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.min1c51.css?v=2.1.2" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/sweetalert.css">
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
                      <i class="material-icons">mail_outline</i>
                    </div>
                    <h4 class="card-title title-per-section">
                      Daftar surat keluar
                    </h4>
                  </div>

                  <div class="card-header">
                    <div class="row">

                      <div class="col-lg-9 col-md-9">
                        <select class="selectpicker" data-size="7" data-style="btn btn-primary sel-form-search"  title="  Single Select">
                          <option disabled selected>Pilih kategori surat masuk</option>
                          <option value="2">Foobar</option>
                          <option value="3">Is great</option>
                        </select>
                      </div>

                      <div class="col-lg-3 col-md-3">
                        <p class="float-right mb-0">
                          <a href="" class="btn btn-twitter">Cari Kategori Surat</a>
                        </p>
                      </div>
                    </div>

                    <!-- button tambah surat -->
                    <p class="float-right mb-0 mt-3">
                      <a href="tambah-surat.php" class="btn btn-success">
                        <i class="material-icons">add</i>&nbsp;Tambah surat
                      </a>
                    </p>
                    <!-- button tambah surat -->

                  </div>

                  <div class="card-body">
                    <table class='table table-striped' id="table1">
                      <thead>
                        <tr>
                          <th>No Agenda</th>
                          <th>Jenis surat</th>
                          <th>Tahun</th>
                          <th>Nomor surat</th>
                          <th>Tanggal surat</th>
                          <th>Perihal</th>
                          <th>Surat Dari</th>
                          <th>Isi Disposisi</th>
                          <th>Diteruskan kepada</th>
                          <th>Status surat</th>
                          <th>Scan surat</th>
                          <th>Edit</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>

                        <!-- kondisi surat dalam proses -->
                        <?php for ($i=0; $i < 1 ; $i++) { ?>
                          <tr>
                            <td>1248</td>
                            <td>Segera</td>
                            <td>2016</td>
                            <td>800/1263/2026</td>
                            <td>27-10-2016</td>
                            <td>Permohonan data PNS</td>
                            <td>Badan kepegawaian daerah</td>
                            <td></td>
                            <td></td>
                            <td><div class="alert alert-primary">surat sedang dalam proses</div></td>
                            <td><a href="#">EKD Permohonan Data PNS</a></td>
                            <td><a href="edit-surat.php" class="btn btn-behance">
                              <i class="material-icons">edit</i></a>
                            </td>
                            <td>
                              <a href="#" class="btn btn-primary">
                                <i class="material-icons">arrow_downward</i>
                              </a>
                              <a href="#" class="btn btn-warning">
                                <i class="material-icons">local_printshop</i>
                              </a>

                              <button class="btn btn-rose btn-fill" id="button-delete-data">
                                <i class="material-icons">delete_outline</i>
                              </button>
                            </td>  
                          </tr>                     
                        <?php } ?>
                        <!-- kondisi surat dalam proses -->

                        <!-- kondisi surat dibaca -->
                        <?php for ($i=0; $i < 1 ; $i++) { ?>
                          <tr>
                            <td>1248</td>
                            <td>Segera</td>
                            <td>2016</td>
                            <td>800/1263/2026</td>
                            <td>27-10-2016</td>
                            <td>Permohonan data PNS</td>
                            <td>Badan kepegawaian daerah</td>
                            <td></td>
                            <td></td>
                            <td><div class="alert alert-success">surat dibaca</div></td>
                            <td><a href="#">EKD Permohonan Data PNS</a></td>
                            <td><a href="edit-surat.php" class="btn btn-behance">
                              <i class="material-icons">edit</i></a>
                            </td>
                            <td>
                              <a href="#" class="btn btn-primary">
                                <i class="material-icons">arrow_downward</i>
                              </a>
                              <a href="#" class="btn btn-warning">
                                <i class="material-icons">local_printshop</i>
                              </a>

                              <button class="btn btn-rose btn-fill" id="button-delete-data">
                                <i class="material-icons">delete_outline</i>
                              </button>
                            </td>
                          </tr>                     
                        <?php } ?>
                        <!-- kondisi surat dibaca -->

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
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-dashboard.min1c51.js?v=2.1.2" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>
<script src="assets/demo/ui-set-datatable.js"></script>


<script>
  document.getElementById('button-delete-data').onclick = function(){
    swal({
      title: "Perhatian !",
      text: "Apakah anda yakin ingin menghapus data ini ?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: '#e43f5a',
      confirmButtonText: 'Hapus data',
      cancelButtonText: "Batalkan",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm){
      if (isConfirm){
        swal("Terhapus!", "Data berhasil dihapus", "success");
      } else {
        swal("Gagal !", "Data gagal dihapus", "error");
      }
    });
  };
</script>