<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>DigiPhone Login Admin</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/admin/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/admin/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/admin/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/admin/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/admin/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/admin/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../assets/admin/vendors/simplebar/simplebar.min.js"></script>
    <script src="../../assets/admin/assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../assets/admin/vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/admin/../../assets/admin/unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../assets/admin/assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../assets/admin/assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../assets/admin/assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../assets/admin/assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
  <div class="container">
    <div class="row flex-center min-vh-100 py-5">
      <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3">
        <a class="d-flex flex-center text-decoration-none mb-4" href="../../assets/admin/index.html">
          <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
            <img src="../../assets/admin/assets/img/icons/logo.png" alt="phoenix" width="58" />
          </div>
        </a>
        <div class="text-center mb-7">
          <h3 class="text-body-highlight">Sign In</h3>
          <p class="text-body-tertiary">Get access to your account</p>
        </div>
        <button class="btn btn-phoenix-secondary w-100 mb-3">
          <span class="fab fa-google text-danger me-2 fs-9"></span>Sign in with Google
        </button>
        <button class="btn btn-phoenix-secondary w-100">
          <span class="fab fa-facebook text-primary me-2 fs-9"></span>Sign in with Facebook
        </button>
        <div class="position-relative">
          <hr class="bg-body-secondary mt-5 mb-4" />
          <div class="divider-content-center">or use email</div>
        </div>
        <!-- Bắt đầu form POST -->
        <form action="" method="POST">
          <div class="mb-3 text-start">
            <label class="form-label" for="email">Email address</label>
            <div class="form-icon-container">
              <input
                class="form-control form-icon-input"
                id="email"
                name="email"
                type="email"
                placeholder="name@example.com"
                required
              />
              <span class="fas fa-user text-body fs-9 form-icon"></span>
            </div>
          </div>
          <div class="mb-3 text-start">
            <label class="form-label" for="password">Password</label>
            <div class="form-icon-container" data-password="data-password">
              <input
                class="form-control form-icon-input pe-6"
                id="password"
                name="password"
                type="password"
                placeholder="Password"
                data-password-input="data-password-input"
                required
              />
              <span class="fas fa-key text-body fs-9 form-icon"></span>
              <button
                class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                data-password-toggle="data-password-toggle"
                type="button"
              >
                <span class="uil uil-eye show"></span>
                <span class="uil uil-eye-slash hide"></span>
              </button>
            </div>
          </div>
          <div class="row flex-between-center mb-7">
            <div class="col-auto">
              <div class="form-check mb-0">
                <input
                  class="form-check-input"
                  id="basic-checkbox"
                  name="remember"
                  type="checkbox"
                  checked="checked"
                />
                <label class="form-check-label mb-0" for="basic-checkbox">Remember me</label>
              </div>
            </div>
            <div class="col-auto">
              <a class="fs-9 fw-semibold" href="forgot-password.html">Forgot Password?</a>
            </div>
          </div>
          <button class="btn btn-primary w-100 mb-3" type="submit">Sign In</button>
        </form>
        <!-- Kết thúc form POST -->
        <div class="text-center">
          <a class="fs-9 fw-bold" href="sign-up.html">Create an account</a>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php 
    require_once 'inc/button-cus.php';
    ?>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../assets/admin/vendors/popper/popper.min.js"></script>
    <script src="../../assets/admin/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../assets/admin/vendors/anchorjs/anchor.min.js"></script>
    <script src="../../assets/admin/vendors/is/is.min.js"></script>
    <script src="../../assets/admin/vendors/fontawesome/all.min.js"></script>
    <script src="../../assets/admin/vendors/lodash/lodash.min.js"></script>
    <script src="../../assets/admin/vendors/list.js/list.min.js"></script>
    <script src="../../assets/admin/vendors/feather-icons/feather.min.js"></script>
    <script src="../../assets/admin/vendors/dayjs/dayjs.min.js"></script>
    <script src="../../assets/admin/assets/js/phoenix.js"></script>
  </body>


<!-- Mirrored from prium.github.io/phoenix/v1.20.1/pages/authentication/simple/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2024 13:39:11 GMT -->
</html>