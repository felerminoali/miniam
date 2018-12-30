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

$fp = fopen(ROOT_PATH . DS . "log" . DS . "error.log", 'a');
fwrite($fp, 'Size: '.count($dataArray));
fclose($fp);


echo json_encode($dataArray);