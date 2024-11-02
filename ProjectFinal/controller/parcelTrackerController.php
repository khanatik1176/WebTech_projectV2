<?php
// session_start();
require_once('../model/FunctionalitesModel.php');

if(isset($_POST['search'])){
    echo 'i am in';
    $search = $_POST['search'];
    $result = parcelSearch($search);
    header("location: ../view/parceltrack.php");
}