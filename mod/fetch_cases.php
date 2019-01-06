<?php

require_once ('../inc/autoload.php');

$objCases = new Cases();

$cases= $objCases->getAllCases();

$data = array();
foreach ($cases as $row){
    $sub_array  = array();
    $sub_array[] = $row["id"];
    $sub_array[] = $row["name"];
    $sub_array[] = '<a href="../'. $row["url"].'">Link</a>';
    $sub_array[]= $row["summary"];
    $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete-case" id="'.$row["id"].'">Delete</button>';
    $data[] = $sub_array;
}

$output = array (
//    "draw"       =>  intval($_POST["draw"]),
//    "recordsTotal"   => count($data),
//    "recordsFiltered"  =>  10,
    'data' => $data
);
echo json_encode($output);