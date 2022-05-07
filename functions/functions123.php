<?php
session_start();
include '../includes/config.php';
include '../includes/db.php';
$logged_in_user = $_SESSION['login_user_id'];
// --------------------------Delete querry starts here now------------------------------------
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE  FROM vaccination WHERE id='$id'";
    $queries = $conn->query($sql);
    // echo $sql;
    // die;
    if ($queries) {
        $_SESSION['status'] = "successfully Deleted";
        header('location:../index.php?vaccine');
    } else {
        $_SESSION['status'] = "Not deleted";
        header('location:../index.php?vaccine');
    }
}
if (isset($_GET['studentsRecords'])) {
    $id = $_GET['studentsRecords'];
    $sql = "DELETE  FROM students12 WHERE id='$id'";
    $queries = $conn->query($sql);
    // echo $sql;
    // die;
    if ($queries) {
        $_SESSION['status'] = "successfully Deleted";
        header('location:../index.php?vaccine');
    } else {
        $_SESSION['status'] = "Not deleted";
        header('location:../index.php?vaccine');
    }
}
if (isset($_GET['covidDetails'])) {
    $id = $_GET['covidDetails'];
    $sql = "DELETE  FROM students_vaccination WHERE id='$id'";
    $queries = $conn->query($sql);
    // echo $sql;
    // die;
    if ($queries) {
        $_SESSION['status'] = "successfully Deleted";
        header('location:../index.php?vaccine');
    } else {
        $_SESSION['status'] = "Not deleted";
        header('location:../index.php?vaccine');
    }
}


//  delete with ajax request

if (isset($_POST['id'])) {
    $get_delable_id = $_POST['id'];
    $query_del_record = "UPDATE vaccination SET is_deleted = 0 WHERE id=$get_delable_id";
    $check_result = $conn->query($query_del_record);
    // echo  $query_del_record;
    // die;
    if ($check_result) {
        echo 1;
    } else {
        echo 0;
    }
}
// ---------------------------------update query starts here ---------------------------

if (isset($_POST['updateVaccine'])) {
    $id = $_POST['recordid'];
    $name = $_POST['name'];
    $company = $_POST['company'];
    $sql = "UPDATE vaccination SET `name` = '$name',`company`='$company' WHERE id=$id";
    $query = $conn->query($sql);
    if ($query) {
        $_SESSION['status'] = "successfully updated";
        header('location:../index.php?vaccine');
    } else {
        $_SESSION['status'] = "successfully updated";
        header('location:../index.php?vaccine');
    }
}
if (isset($_POST['updateStudents'])) {
    $id = $_POST['updateStudent'];
    $sName = $_POST['student_name'];
    $fName = $_POST['father_name'];
    $mName = $_POST['mother_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $roll_No = $_POST['roll_no'];
    $addmisson =  date("y-m-d", strtotime($_POST['addmission_date']));
    $aadhar = $_POST['aadhar_no'];
    $familyId = $_POST['ppp'];
    $positiveStatus = $_POST['positive_status'];
    if($positiveStatus == 1){
        $isPositive = 1;
        $sql = "UPDATE students SET `student_name` = '$sName',`father_name`='$fName',`mother_name`='$mName',`email`='$email',`mobile`='$mobile',`roll_no`='$roll_No',`admission_date`='$addmisson',`aadhar_no`='$aadhar',`ppp`='$familyId',`positive_status`='$positiveStatus',`ever_positive`='$isPositive', `mobile`='$mobile' WHERE id=$id";
    }else{
        $sql = "UPDATE students SET `student_name` = '$sName',`father_name`='$fName',`mother_name`='$mName',`email`='$email',`mobile`='$mobile',`roll_no`='$roll_No',`admission_date`='$addmisson',`aadhar_no`='$aadhar',`ppp`='$familyId', `mobile`='$mobile' WHERE id=$id";
    }
    $query = $conn->query($sql);
    if ($query) {
        $_SESSION['status'] = "successfully updated";
        header('location:../index.php?students');
    } else {
        $_SESSION['status'] = "successfully updated";
        header('location:../index.php?students');
    }
}
if (isset($_POST['updateStudentscovid'])) {
    $id = $_POST['updatecovid'];
    $sName = $_POST['student_name'];
    $fName = $_POST['father_name'];
    $mName = $_POST['mother_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $roll_No = $_POST['roll_no'];
    $addmisson =  date("y-m-d", strtotime($_POST['addmission_date']));
    $aadhar = $_POST['aadhar_no'];
    $familyId = $_POST['ppp'];
    $sql = "UPDATE students_vaccination SET `student_name` = '$sName',`father_name`='$fName',`mother_name`='$mName',`email`='$email',`mobile`='$mobile',`roll_no`='$roll_No',`admission_date`='$addmisson',`aadhar_no`='$aadhar',`ppp`='$familyId', `mobile`='$mobile' WHERE id=$id";
    $query = $conn->query($sql);
    if ($query) {
        $_SESSION['status'] = "successfully updated";
        header('location:../index.php?covid_np');
    } else {
        $_SESSION['status'] = "successfully updated";
        header('location:../index.php?covid_np');
    }
}
if (isset($_POST['delete'])) {
    $id = $_GET['id'];
    $deletequery = "DELETE from students WHERE id=$id ";
    $query = mysqli_query($conn, $deletequery);
    if ($query) {
?>
        <script>
            alert("Deleted successfully");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Deleted successfully");
        </script>
<?php
        header('location:../index.php?dashboard');
    }
    // end user details update code
    if (isset($_POST['update_user_profile_setting'])) {
        if (isset($_FILES['upload_img'])) {
            // $profile_img_name = 'default.img';
            $profile_img_name = $_FILES['upload_img']['name'];
            $profile_img_tmp =  $_FILES['upload_img']['tmp_name'];
            $allowed = array('jpg', 'jpeg', 'png');
            $file_extension = pathinfo($profile_img_name, PATHINFO_EXTENSION);
            if (!in_array($file_extension, $allowed) & !empty($profile_img_name)) {
                // print_r($_FILES);
                $_SESSION['profile-msg'] = 'Use jpeg,jpg,png';
                header('location:../index.php');
            } else {
                move_uploaded_file($profile_img_tmp, "../images/faces/$profile_img_name");
                $sql = "UPDATE users SET profile_img=? WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("si", $profile_img_name, $logged_in_user);
                if ($stmt->execute()) {
                    $_SESSION['profile-msg'] = 'Profile image updated successfully';
                    header('location:../index.php');
                }
                // die;
            }
        } else {
            header('location:../index.php');
        }
    } else {
        header('location:../index.php');
    }
}
// print_r($_POST);
// die;
// --------------------------------------------insert query-----------------------------
if (isset($_POST['studentrejister'])) {
    $id = $_POST['updateStudent'];
    $sName = $_POST['student_name'];
    $fName = $_POST['father_name'];
    $mName = $_POST['mother_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $roll_No = $_POST['roll_no'];
    $addmisson = date("y-m-d", strtotime($_POST['addmission_date']));
    $aadhar = $_POST['aadhar_no'];
    $familyId = $_POST['ppp'];
    $positiveStatus = $_POST['positive_status'];
    $isPositive = $positiveStatus == 1 ? 1 :0;
    $sql = "INSERT INTO  students ( `student_name` ,`father_name`,`mother_name`,`email`,`mobile`,`roll_no`,`admission_date`,`aadhar_no`,`ppp`,`positive_status`,`ever_positive`,)
    VALUES ('$sName','$fName','$mName','$email','$mobile','$roll_No','$addmisson','$aadhar','$familyId','$positiveStatus','$isPositive')";
    $query = $conn->query($sql);
    if ($query) {
        $_SESSION['status'] = "successfully inserted";
        header('location:../index.php?students');
    } else {
        $_SESSION['status'] = "Not inserted";
        header('location:../index.php?students');
    }
}
//--------------------------------- details covid-------------------

if (isset($_POST['covidDataUpdate'])) {
    $id = $_POST['covidDetailsUpdate'];
    $sName = $_POST['student_name'];
    $fName = $_POST['father_name'];
    $mName = $_POST['mother_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $roll_No = $_POST['roll_no'];
    $addmisson = date("y-m-d", strtotime($_POST['addmission_date']));
    $aadhar = $_POST['aadhar_no'];
    $familyId = $_POST['ppp'];
    $familyId = $_POST['ppp'];
    $sql = "INSERT INTO  students_vaccine ( `student_name` ,`father_name`,`mother_name`,`email`,`mobile`,`roll_no`,`admission_date`,`aadhar_no`,`ppp`) VALUES ('$sName','$fName','$mName','$email','$mobile','$roll_No','$addmisson','$aadhar','$familyId')";
    $query = $conn->query($sql);
    // echo $sql;
    // die;
    $query = $conn->query($sql);
    if ($query) {
        $_SESSION['status'] = "successfully inserted";
        header('location:../index.php?covid_np');
    } else {
        $_SESSION['status'] = "Not inserted";
        header('location:../index.php?covid_np');
    }
}
// print_r($_POST);
// die;
if (isset($_POST['updateVaccineRwcords'])) {
    $id = $_POST['recordid'];
    $name = $_POST['name'];
    $company = $_POST['company'];
    $sql = "INSERT INTO  vaccination ( `name` ,`company`) VALUES ('$name','$company') ";
    // echo $sql;
    // die;
    $query = $conn->query($sql);
    if ($query) {
        $_SESSION['status'] = "successfully updated";
        header('location:../index.php?vaccine');
    } else {
        $_SESSION['status'] = "successfully updated";
        header('location:../index.php?vaccine');
    }
}
