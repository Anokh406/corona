<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link ref="stylesheet" href="./vendors/feather/feather.css">
  <link rel="stylesheet" href="./vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./css/vertical-layout-light/style.css">
  <!-- <link rel="stylesheet" href="./css/custom.css"> -->
  <!-- endinject -->
  <link rel="shortcut icon" href="./images/favicon.png" />
</head>

<body>
  <!-- <div id="preloader"> <div id="status"></div></div> -->
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-5 mx-auto ">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 shadow">
              <div class="brand-logo">
                <!-- <img src="./images/logo.svg" alt="logo"> -->
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3 " method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" class="rounded form-control" name="last_name" id="last_name" placeholder="Last name"  required value="">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="rounded form-control" name="first_name" id="first_name" placeholder="First name" required value="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="rounded form-control" id="user_email" placeholder="Email" name="email" required value="">
                </div>
                <div class="form-group">
                  <input type="password" class="rounded form-control" name="user_password" id="password" placeholder="Password" required value="">
                </div>
                <div class="form-group">
                  <input type="text" class="rounded form-control" id="company_name" name="company_name" placeholder="Company Name" required value="">
                </div>
                <!-- <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div> -->
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="user_register" name="add_user">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-primary">Login</a>
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
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="./js/jquery/jquerymin.js"></script>
  <script src="./vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="./js/off-canvas.js"></script>
  <script src="./js/hoverable-collapse.js"></script>
  <script src="./js/template.js"></script>
  <script src="./js/settings.js"></script>
  <script src="./js/todolist.js"></script>
  <!-- <script src="./vendors/sweetalert/sweetalert.min.js"></script> -->
  <!-- endinject -->
  <?php
  include 'includes/config.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_user'])) {
    if ($stmt = $conn->prepare('SELECT id, email FROM users WHERE email = ?')) {
      $stmt->bind_param('s', $_POST['email']);
      $stmt->execute();
      $stmt->store_result();
      if ($stmt->num_rows > 0) {
        echo "<script>Swal.fire({icon:'error',title: 'Oops...',text:'Email exists! Choose another'})</script>";
      } else {
        $query = $conn->prepare('INSERT INTO users (first_name,last_name,email,password,company_name) VALUES (?,?,?,?,?)');
        $password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
        $query->bind_param('sssss', $_POST['first_name'], $_POST['last_name'], $_POST['email'], $password, $_POST['company_name']);
        if ($query->execute()) {
          $_SESSION["msg"] = "We have sent an activation link to";
          $_SESSION["regmail"] = $_POST['email'];
          echo "<script> window.location='./login.php'; </script>";
        } else {
          echo 'Could not prepare statement!';
        }
      }
    }
    $stmt->close();
  }
  $conn->close();
  ?>
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script> -->
  <!-- <script    type="text/javascript">
$(window).load(function() { // makes sure the whole site is loaded
$('#status').fadeOut(); // will first fade out the loading animation
$('#preloader').delay(500).fadeOut(100); // will fade out the white DIV that covers the website.
$('body').delay(500).css({'overflow':'visible'});
});
</script> -->
</body>

</html>