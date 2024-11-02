<?php
require_once('../model/FunctionalitesModel.php');

if (isset($_POST['careerID']) && isset($_POST['jobtitle']) && isset($_POST['jobDes']) && isset($_POST['postdate']) && isset($_POST['endDate'])) {
    $careerID = $_POST['careerID'];
    $jobtitle = $_POST['jobtitle'];
    $jobDes = $_POST['jobDes'];
    $postdate = $_POST['postdate'];
    $endDate = $_POST['endDate'];
    
    updateCareer($careerID, $jobtitle, $jobDes, $postdate, $endDate);

    echo '../AdminPanel/viewCareer.php';
    
} else {
    echo 'Invalid';
}

?>