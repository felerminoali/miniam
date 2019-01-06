<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/31/2018
 * Time: 2:22 PM
 */

require_once ('../inc/autoload.php');

if(isset($_POST["id"])){

    $objLaw = new Laws();
    $objLaw->removeLaw($_POST["id"]);

    echo 'Data Deleted';
}