<?php
session_start();
include './includes/config.php';
$qry = 'SELECT msg_date FROM general_settings WHERE id = 2';
$exec = $conn->query($qry);
$today = date("Y-m-d");
if ($exec->num_rows > 0){
  $data = $exec->fetch_assoc();
  $msgDate = date('Y-m-d',strtotime($data['msg_date']));
  if($msgDate !== $today){
    // ========================================================================
    $sql="SELECT student_name,first_dose,mobile, DATEDIFF(first_dose, CURDATE()) AS days FROM students WHERE `second_dose` IS NULL";
    $exec=$conn->query($sql);
    if($exec-> num_rows > 0){
      $msg=[];
      while($row=$exec->fetch_assoc()){
        $days = $row['days'] * -1;
        if($days >= 80){
         $msg[] = 'Hello, '.$row["student_name"].' your second dose is due on '.date('Y-m-d', strtotime($today. ' + 4 days'));
          // header('Location: http://localhost/linked-auto/api/v1?msg='.$msg);
        }
      }
      header('Location: http://localhost/linked-auto/api/v1?msg='.$msg);
    }
    // ========================================================================
    // $sql = "UPDATE general_settings SET `msg_date` = '$today' WHERE id=2";
    // $query = $conn->query($sql);
  }
}