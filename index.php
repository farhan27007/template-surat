<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Login Page
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

  <!-- CSS Files -->

  <link href="assets/css/material-dashboard.min1c51.css?v=2.1.2" rel="stylesheet" />
  <link href="assets/demo/demo.css" rel="stylesheet" />

</head>

<body>

  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page" style="background-color:#1a1a2e;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="" action="#">
              <div class="card card-login card-hidden">
                <div class="card-header card-header-rose text-center">
                  <p class="mb-0"><i class="material-icons">person_outline</i></p>
                  <h4 class="card-title">Login</h4>
                </div>
                <div class="card-body ">
                  <p class="card-description text-center">Selamat datang di aplikasi surat, silahkan isi username dan password anda</p>
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">person_outline</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Username...">
                    </div>
                  </span>

                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control" placeholder="Password...">
                    </div>
                  </span>

                </div>
                <div class="card-footer justify-content-center">
                  <a href="#pablo" class="btn btn-rose mt-3 mb-2 w-100">Login</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/js/material-dashboard.min1c51.js?v=2.1.2" type="text/javascript"></script>
  
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
</body>
</html>