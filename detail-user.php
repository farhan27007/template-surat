<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail user</title>

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
                  <div class="card-header card-header-icon card-header-rose">
                    <div class="card-icon">
                      <i class="material-icons">person_search</i>
                    </div>
                    <h4 class="card-title title-per-section">
                     Detail user
                   </h4>
                 </div>

                 <div class="card-header">
                  <div class="row">
                  </div>

                  <div class="card-body">

                    <div class="row mt-4">
                      <div class="col-12 mb-2">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td class="head-detail-user">NIP</td>
                                <td>123</td>
                              </tr>
                              <tr>
                               <td class="head-detail-user">NAMA</td>
                               <td>Adm</td>
                             </tr>
                             <tr>
                               <td class="head-detail-user">JABATAN</td>
                               <td>Admin</td>
                             </tr>
                             <tr>
                              <td class="head-detail-user">GOLONGAN</td>
                              <td>G1</td>
                            </tr>
                            <tr>
                              <td class="head-detail-user">USERNAME</td>
                              <td>@admin</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-12 mb-2">
                      <p class="role-title mt-3 mb-0">Role :</p>
                      <div id="accordion" role="tablist">
                        <div class="card-collapse">

                          <!-- dashboard role -->
                          <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="collapsed">
                                Dashboard
                                <i class="material-icons">keyboard_arrow_down</i>
                              </a>
                            </h5>
                          </div>
                          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                            <div class="card-body">

                              <p class="text-success">
                                <i class="material-icons">check</i>&nbsp;
                                <span>Dapat melihat chart data surat</span>
                              </p>

                              <p class="text-success">
                                <i class="material-icons">check</i>&nbsp;
                                <span> Dapat melihat daftar 10 top disposisi</span>
                              </p>

                              <p class="text-success">
                                <i class="material-icons">check</i>&nbsp;
                                <span> Dapat melihat daftar 10 top kotak masuk</span>
                              </p>

                              <p class="text-success">
                                <i class="material-icons">check</i>&nbsp;
                                <span>Dapat melihat status surat</span>
                              </p>

                            </div>
                          </div>
                        </div>
                        <!-- dashboard role -->

                        <!-- kotak masuk role -->
                        <div class="card-collapse">
                          <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                              <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Surat masuk
                                <i class="material-icons">keyboard_arrow_down</i>
                              </a>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">

                              <p class="text-success">
                                <i class="material-icons">check</i>&nbsp;
                                <span>Dapat melihat daftar surat masuk</span>
                              </p>

                              <p class="text-success">
                                <i class="material-icons">check</i>&nbsp;
                                <span> Dapat mengunduh file surat masuk</span> 
                              </p>

                              <p class="text-success">
                                <i class="material-icons">check</i>&nbsp;
                                <span>Dapat mencetak surat masuk</span>
                              </p>

                              
                              <p class="text-success">
                                <i class="material-icons">check</i>&nbsp;
                                <span> Dapat menghapus surat masuk </span>
                              </p>

                            </div>
                          </div>
                        </div>
                        <!-- kotak masuk role -->

                        <!-- kotak keluar role -->
                        <div class="card-collapse">
                          <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                              <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Surat keluar
                                <i class="material-icons">keyboard_arrow_down</i>
                              </a>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">

                              <p class="text-success">
                                <i class="material-icons">check</i>&nbsp;
                                <span>Dapat melihat daftar surat keluar</span>
                              </p>

                              <p class="text-success">
                                <i class="material-icons">check</i>&nbsp;
                                <span>Dapat menambah surat keluar</span>
                              </p>

                              <p class="text-success">
                                <i class="material-icons">check</i>&nbsp;
                                <span> Dapat mengedit surat keluar</span>
                              </p>

                              <p class="text-success">
                                <i class="material-icons">check</i>&nbsp;
                                <span>Dapat menghapus surat keluar</span>
                              </p>

                              <p class="text-danger">
                                <i class="material-icons">close</i>&nbsp;
                                <span>Dapat mencetak surat keluar</span>
                              </p>

                              <p class="text-danger">
                                <i class="material-icons">close</i>&nbsp;
                                <span>Dapat mengunduh surat keluar</span>
                              </p>

                            </div>
                          </div>
                        </div>
                        <!-- kotak keluar role -->

                        <!-- disposisi role -->
                        <div class="card-collapse">
                          <div class="card-header" role="tab" id="headingfour">
                            <h5 class="mb-0">
                              <a class="collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Disposisi
                                <i class="material-icons">keyboard_arrow_down</i>
                              </a>
                            </h5>
                          </div>
                          <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="card-body">

                              <p class="text-success">
                                <i class="material-icons">close</i>&nbsp;
                                <span>Dapat melihat daftar disposisi</span>
                              </p>

                              <p class="text-danger">
                                <i class="material-icons">close</i>&nbsp;
                                <span>Dapat mengunduh file surat yang ada pada halaman disposisi</span>
                              </p>

                            </div>
                          </div>
                        </div>
                        <!-- disposisi role -->

                        <!-- user role -->
                        <div class="card-collapse">
                          <div class="card-header" role="tab" id="headingfive">
                            <h5 class="mb-0">
                              <a class="collapsed" data-toggle="collapse" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                User
                                <i class="material-icons">keyboard_arrow_down</i>
                              </a>
                            </h5>
                          </div>
                          <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion">
                            <div class="card-body">

                             <p class="text-success">
                              <i class="material-icons">close</i>&nbsp;
                              <span>Dapat melihat daftar user</span>
                            </p>

                            <p class="text-success">
                              <i class="material-icons">close</i>&nbsp;
                              <span>Dapat menambahkan user baru</span>
                            </p>               

                            <p class="text-success">
                              <i class="material-icons">close</i>&nbsp;
                              <span>Dapat mengedit data user</span>
                            </p>

                            <p class="text-success">
                              <i class="material-icons">close</i>&nbsp;
                              <span>Dapat menghapus data user</span>           
                            </p>

                          </div>
                        </div>
                      </div>
                      <!-- disposisi role -->

                    </div>
                  </div>

                  <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-success float-right">
                      <i class="material-icons">save</i>&nbsp;
                      <span>Simpan</span>
                    </button>
                  </div>
                </div>
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