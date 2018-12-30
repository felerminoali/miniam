<?php

require_once ('../inc/autoload.php');

$objCases = new Cases();

$cases= $objCases->getAllCases();

foreach ($cases as $row){
    $dataArray = array();
    $dataArray[] = $row["id"];
    $dataArray[] = $row["name"];
    $dataArray[] = $row["url"];
    $dataArray[] = $row["summary"];
}

//echo json_encode($cases);
echo json_encode($dataArray);