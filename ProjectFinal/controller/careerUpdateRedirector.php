<?php
require_once('../model/FunctionalitesModel.php');

$careerID = $_POST['careerid'];
if(isset($_POST['careerid'])){
    fetchCareer($careerID);
    echo "../AdminPanel/updateCareer.php";
    exit();
}


?>