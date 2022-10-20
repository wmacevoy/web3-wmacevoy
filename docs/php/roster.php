<?php

require_once('db.php');

$stmt = $pdo->query("SELECT * FROM user");
$rows=array();
while ($row = $stmt->fetch()) {
    array_push($rows,$row);
}
header('Content-Type: application/json; charset=utf-8');
$response = array('status' => 'ok', 'value' =>  $rows );
echo json_encode($response);
