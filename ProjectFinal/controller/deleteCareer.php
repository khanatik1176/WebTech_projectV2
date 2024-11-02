<?php

require_once('../model/FunctionalitesModel.php');

if(isset($_POST['careerid'])){
    $careerID = $_POST['careerid'];
    deleteCareer($careerID);
    echo 'Deleted successfully';
}