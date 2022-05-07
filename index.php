<?php
session_start();
if (isset($_SESSION['loggedin']) !== true) {
  echo header('location:./login.php');
  exit;
}
$login_user_id = $_SESSION['login_user_id'];
include('includes/db.php');
include('includes/config.php');
?>
<!DOCTYPE html>
<?php include('./includes/head.php'); ?>
<html lang="en">

<body>
  <?php
  if ($usertype == 0) { ?>
    <div class="container-scroller">
      <?php include './includes/header.php'; ?>
      <div class="container-fluid page-body-wrapper">
        <?php include "./includes/sidebar.php" ?>
        <?php if (isset($_GET['dashboard'])) {
          include 'dashboard.php';
        } else if (isset($_GET['vaccine'])) {
          include 'vaccine.php';
        } else if (isset($_GET['students'])) {
          include 'students.php';
        } else if (isset($_GET['covid_np'])) {
          include 'covid_np.php';
        } else {
          include 'logout.php';
        } ?>
      </div>
    </div>
    <?php include './includes/footer.php'; ?>
  <?php } else if ($usertype == 1) {
    include 'admin_dashboard.php';
  } else {
    echo header('location:./login.php');
  } ?>
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="./js/jquery/custom-code.js"></script>
  <script src="./js/custom.js"></script>
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <script src="./vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="./vendors/select2/select2.min.js"></script>
  <!-- Custom js for this page-->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/custome.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
</body>

</html>