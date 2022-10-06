<?php 
$request = json_decode($_REQUEST['request'],true);

if ($request['op'] == "add") {
    $sum = 0.0;
    $ok = TRUE;
    foreach ($request['args'] as $key => $value) {
        $ok = $ok && preg_match("/^(-?[0-9]+([.][0-9]+)?)$/",$value);
        error_log("$value is $ok");
        if ($ok) {
            $sum += (float) $value;
        }
    }

    if ($ok) {
      $response = array('status' => 'ok', 'value' =>  $sum );
    } else {
      $response = array('status' => 'fail', 'message' => 'not all values are numbers');
    }
} else {
    $response = array('status' => 'fail', 'message' => 'unknown op');
}
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);