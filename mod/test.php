<?php

require_once ('../inc/autoload.php');

$objUser = new User();

$users = $objUser->getUsers();
$dataArray = array();
foreach ($users as $row){
    $dataArray[] = $row["id"];
    $dataArray[] = $row["first_name"];
    $dataArray[] = $row["email"];

}

echo json_encode($dataArray);