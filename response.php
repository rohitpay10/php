<?php 


include_once __DIR__.'/pay10_helper.php';
include_once __DIR__.'/config.php';

$pay10_transaction = new Pay10PGModule;
$pay10_transaction->setSalt($global_vars['SALT']);
$valid = $pay10_transaction->validateResponse($_REQUEST);
$response = array('POST' => $_POST, 'GET' => $_GET, 'IS_VALID' => $valid);
header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);

 ?>