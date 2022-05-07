<?php
session_start();
// echo "<pre>";
// print_r($_SESSION);
// die;
include './includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./vendors/feather/feather.css">
  <link rel="stylesheet" href="./vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="./css/custome.css ">
  <!-- endinject -->
  <link rel="shortcut icon" href="./images/favicon.png" />
  <script src="./js/jquery/jquery-1.12.4.min.js"></script>
  <script src="./js/preloader.js"></script>
</head>

<body>
  <div id="preloader">
    <div id="status"></div>
  </div>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="./images/ek.jpeg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <?php if (isset($_SESSION['msg'])) { ?>
                  <div class="alert alert-warning" role="alert"><?php $msg = $_SESSION['msg'];
                                                                $regmail = $_SESSION['regmail'];
                                                                echo $msg . "&nbsp" . $regmail;
                                                                unset($_SESSION['msg'], $_SESSION['regmail']); ?>
                  </div>
                <?php } ?>
                <div class="form-group">
                  <span class="text-danger email-msg"></span>
                  <input type="email" class="form-control form-control-lg rounded" id="login_email" name="login_email" placeholder="Email" value="" required>
                </div>
                <div class="form-group">
                  <span class="text-danger pass-msg"></span>
                  <input type="password" class="form-control form-control-lg rounded" name="login_pass" id="login_pass" placeholder="Password" value="" required>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="login_btn" name="login_btn">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div> -->
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_btn'])) {
    if ($stmt = $conn->prepare('SELECT id,first_name,password FROM users WHERE email = ?')) {
      $stmt->bind_param('s', $_POST['login_email']);
      $stmt->execute();
      $stmt->store_result();
      if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $first_name, $password);
        $stmt->fetch();
        if (password_verify($_POST['login_pass'], $password)) {
          session_regenerate_id();
          $_SESSION['loggedin'] = TRUE;
          $_SESSION['login_user_id'] = $id;
          $_SESSION['name'] = $first_name;
          $_SESSION['login_user_email'] = $_POST['login_email'];
          // ===============================================================
          header('Location: http://localhost/linked-auto/api/v1?msg='.$msg);
          // =====================================================================
          echo "<script> window.location='./index.php?dashboard'; </script>";
        } else {
          echo "<script>$('.email-msg').text('Incorrect Email or Password!');</script>";
        }
      } else {
        echo "<script>$('.email-msg').text('Incorrect Email or Password!');</script>";
      }
    }
  }
  ?>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="./vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="./js/off-canvas.js"></script>
  <script src="./js/hoverable-collapse.js"></script>
  <script src="./js/template.js"></script>
  <script src="./js/settings.js"></script>
  <script src="./js/todolist.js"></script>
  <!-- endinject -->

</body>

</html>