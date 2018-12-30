<?php

require_once ('../inc/autoload.php');

$objCases = new Cases();

$cases= $objCases->getAllCases();

$data = array();
foreach ($cases as $row){
    $sub_array  = array();
    $sub_array[] = $row["id"];
    $sub_array[] = $row["name"];
    $sub_array[] = $row["url"];
    $sub_array[]= $row["summary"];
    $data[] = $sub_array;
}

//echo json_encode($cases);

$fp = fopen(ROOT_PATH . DS . "log" . DS . "error.log", 'a');
fwrite($fp, 'Size: '.count($data));
fclose($fp);

$output = array (
    'data' => $data
);
echo json_encode($output);