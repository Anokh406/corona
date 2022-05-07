<?php
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';

use Twilio\Rest\Client;

header("Content-type:application/json");

function load_class($class)
{
    require_once $class . '.php';
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

if (isset($request[1])) {
    $resource_id = $request[1];
} else {
    $resource_id = '';
}

$SMSResponse = 'Some Data';

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
if ($resource == 'students2') {
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
if ($resource == 'students3') {
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
