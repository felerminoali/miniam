<?php

require_once ('../inc/autoload.php');

$objCases = new Cases();

$cases= $objCases->getAllCases();

$casesArray = array();
foreach ($cases as $row){
    $dataArray = array();
    $dataArray[] = $row["id"];
    $dataArray[] = $row["name"];
    $dataArray[] = $row["url"];
    $dataArray[]= $row["summary"];
    $casesArray[] = $dataArray;
}

//echo json_encode($cases);

$fp = fopen(ROOT_PATH . DS . "log" . DS . "error.log", 'a');
fwrite($fp, 'Size: '.count($casesArray));
fclose($fp);


echo json_encode($casesArray);