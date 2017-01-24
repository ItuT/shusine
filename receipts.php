
<?php
$decode = json_decode($_REQUEST['request']);
$json = $decode->name;
 
header('Content-type: application/json');
echo json_encode($json);
 
?>