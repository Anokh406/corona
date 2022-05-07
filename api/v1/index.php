<?php
require __DIR__.'/twilio-php-main/src/Twilio/autoload.php';

use Twilio\Rest\Client;

header("Content-type:application/json");

function load_class($class)
{
    require_once $class.'.php';
}
spl_autoload_register('load_class');

$http_verb = $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    foreach ($_GET as $key => $value) {
        $params[$key] = $value;
    }
}

$request  = explode('/', $_REQUEST['request']);
$resource = $request[0];
parse_str($_SERVER["QUERY_STRING"], $qString);
$msg = $qString['msg'];
if (isset($request[1])) {
    $resource_id = $request[1];
} else {
    $resource_id = '';
}
$SMSResponse = 'Some Data';
// ===================================================================
//   $account_sid= 'ACd38e2e21e315244f5ba820d11d3d23bd';
// $auth_token='813cd6cdbd8c92c24c57c9ff774b76cd';
// ===================================================================





// try {
    $account_sid = 'ACd10ae73cf36f5329cbfc8b8fc21fb5fb';
    $auth_token = '4297a98ddf8e4a85b4546e33f0b42e98';
    // In production, these should be environment variables. E.g.:
    // $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
    // A Twilio number you own with SMS capabilities


    // another twilio number for emergancy use
    //$twilio_number= "(850) 813-0894";
    $twilio_number = "+13862842717";
    $client = new Client($account_sid, $auth_token);
// ==============================
session_start();
include '../../includes/config.php';
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
            while($row=$exec->fetch_assoc()){
        $days = $row['days'] * -1;
        if($days >= 80){
        // echo     $phone='+'.$row["mobile"];
        // echo "<pre>";
        // echo "<br>";
          $msg = 'Hello, '.$row["student_name"].' your second dose is due on '.date('Y-m-d', strtotime($today. ' + 4 days'));
        // -------------------------------
        $SMSResponse = $client->messages->create(
            '+'.$row["mobile"],
            // "+919050325406",
            array(
                'from' => $twilio_number,
                // 'body' => 'Congratulations! You have succesfully completed the shedule of all doses of COVID-19 vaccine'
                'body' => $msg
            )
        );
        // die;
        // -------------------------------
        }
      }
    }
    // ========================================================================
    $sql = "UPDATE general_settings SET `msg_date` = '$today' WHERE id=2";
    $query = $conn->query($sql);
  }
}
header('Location: http://localhost/linked-auto/index.php?dashboard');
// =====================================================================
// } catch (Exception $ex) {
//     $error = [];
//     $error['message'] = $ex->getMessage();
//     $SMSResponse = $error;
// }
/*
if ($resource == 'students') {
    //$request = new Students;
    try {
        $account_sid = 'ACd10ae73cf36f5329cbfc8b8fc21fb5fb';
        $auth_token = '4297a98ddf8e4a85b4546e33f0b42e98';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
        // A Twilio number you own with SMS capabilities
        $twilio_number = "+13862842717";
        $client = new Client($account_sid, $auth_token);
        $SMSResponse = $client->messages->create(
            // Where to send a text message (your cell phone?)
            '+919992725406',
            array(
                'from' => $twilio_number,
                'body' => 'Congratulations! You have succesfully completed the shedule of all doses of COVID-19 vaccine'
            )
        );
    } catch (Exception $ex) {
        $error = [];
        $error['message'] = $ex->getMessage();
        $SMSResponse = $error;
    }
}
else if ($resource == 'students2') {
    //$request = new Students;
    try {
        $account_sid = 'ACd10ae73cf36f5329cbfc8b8fc21fb5fb';
        $auth_token = '4297a98ddf8e4a85b4546e33f0b42e98';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
        // A Twilio number you own with SMS capabilities
        $twilio_number = "+13862842717";
        $client = new Client($account_sid, $auth_token);
        $SMSResponse = $client->messages->create(
            // Where to send a text message (your cell phone?)
            '+919992725406',
            array(
                'from' => $twilio_number,
                'body' => 'Your vaccination for 2nd dose is due.Please shedule your apointment'
            )
        );
    } catch (Exception $ex) {
        $error = [];
        $error['message'] = $ex->getMessage();
        $SMSResponse = $error;
    }
}
else if ($resource == 'students3') {
    //$request = new Students;
    try {
        $account_sid = 'ACd10ae73cf36f5329cbfc8b8fc21fb5fb';
        $auth_token = '4297a98ddf8e4a85b4546e33f0b42e98';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
        // A Twilio number you own with SMS capabilities
        $twilio_number = "+13862842717";
        $client = new Client($account_sid, $auth_token);
        $SMSResponse = $client->messages->create(
            // Where to send a text message (your cell phone?)
            '+919992725406',
            array(
                'from' => $twilio_number,
                'body' => 'Improve your Imunity or clean your hands with the use of hand santizer or wear a mask or keep distance'
            )
        );
    } catch (Exception $ex) {
        $error = [];
        $error['message'] = $ex->getMessage();
        $SMSResponse = $error;
    }
}

if ($http_verb == 'GET') {

    if (!empty($resource_id)) {
        $response = json_encode($SMSResponse, JSON_PRETTY_PRINT);
    } else {
        $response = json_encode($SMSResponse, JSON_PRETTY_PRINT);
    }
    echo $response;
}
*/