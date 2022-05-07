<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>linked Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="css/custome.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <script src="./js/jquery/jquery-1.12.4.min.js"></script>
  <script src="./js/preloader.js"></script>
  <!-- step js for adding tabs -->
  <script src="./js/step-js/jquery.steps.min.js"></script>
  <!-- End step js for adding tabs -->
</head>
<?php
$select_query = "select * from users where id= $login_user_id";
$statement = $conn->query($select_query);
$result = $statement->fetch_assoc();

// user details 
$usertype = $result['user_type'];
$profile = $result['profile_img'];
$fname = $result['first_name'];
$lname = $result['last_name'];
$user_email = $result['email'];
$_SESSION['usertype'] = $usertype;
?>