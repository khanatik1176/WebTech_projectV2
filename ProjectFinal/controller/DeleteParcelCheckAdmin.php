<?php
require_once('../model/AdminModel.php');
require_once('../model/parcelmgtModel.php');


if (isset($_POST['delete_btn'])) {
    
    if (isset($_POST['parcelID']) && isset($_POST['checked']))
    {
        $parcelID = $_POST['parcelID'];
        $result=deletePercelAdmin($parcelID);
        if($result==true)
        {
            header('location: ../view/admindashboard.php');
        }
    }
} else {
    echo '<center>Please select the CHECKBOX</center>';
}



?>