<?php
require_once('../model/CareerPanelModel.php');

$printcookie="";
    setcookie("visit","1",time()+36000);
    if(isset($_COOKIE["visit"]))
    {
        $printcookie= "visited";
    }
    else
    {
        $printcookie= "welcome";
    }
    if (isset($_POST['jobTitle']) && isset($_POST['jobDes']) && isset($_POST['postdate']) && isset($_POST['endDate'])) {
        $jobtitle = $_POST['jobTitle'];
        $jobDes = $_POST['jobDes'];
        $postdate = $_POST['postdate'];
        $endDate = $_POST['endDate'];
        
        addCareer($jobtitle, $jobDes, $postdate, $endDate);
    } else {
        echo 'Invalid';
    }
    
?>