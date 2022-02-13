<?php
$json = file_get_contents('json1.json');
$jsonarray = json_decode($json,true);

$jsonarray[$_GET['ism']]['status'] = !$jsonarray[$_GET['ism']]['status'];

file_put_contents('json1.json', json_encode($jsonarray,JSON_PRETTY_PRINT));
header('Location:json.php');

?>