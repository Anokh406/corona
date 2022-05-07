<?php
include '../includes/config.php';
if (isset($_POST['id'])) {
    $get_delable_id = $_POST['id'];
    $query_del_record = "UPDATE vaccination SET is_deleted=1 WHERE id=$get_delable_id";
    $check_result = $conn->query($query_del_record);
    if ($check_result) {
        echo 1;
    } else {
        echo 0;
    }
}
// print_r($_POST);
// die;
if (isset($_POST['ida'])) {
    $get_delable_id = $_POST['ida'];
    $query_del_record = "UPDATE students SET is_deleted=0 WHERE id=$get_delable_id";
    $check_result = $conn->query($query_del_record);
    if ($check_result) {
        echo 1;
    } else {
        echo 0;
    }
}
if (isset($_POST['ids'])) {
    $get_delable_id = $_POST['ids'];
    $query_del_record = "UPDATE students SET is_deleted=0 WHERE id=$get_delable_id";
    $check_result = $conn->query($query_del_record);
    if ($check_result) {
        echo 1;
    } else {
        echo 0;
    }
}
