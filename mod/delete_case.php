<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/31/2018
 * Time: 2:22 PM
 */

require_once ('../inc/autoload.php');

if(isset($_POST["id"])){

    $objCase = new Cases();
    $objCase->removeCase($_POST["id"]);

    echo 'Data Deleted';
}