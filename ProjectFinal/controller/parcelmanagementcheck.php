<?php
require_once('../model/AdminModel.php');
require_once('../model/parcelmgtModel.php');
if (isset($_POST['submit'])) {
    
    if (isset($_POST['parcelname']) && isset($_POST['percelType']) && isset($_POST['parcelFrom']) && isset($_POST['parcelTo']) && isset($_POST['receivername']) && isset($_POST['rnumber']))
    {
        $username = $_SESSION['Username'];
        $percelName = $_POST['parcelname'];
        $percelType = $_POST['percelType'];
        $percelFrom = $_POST['parcelFrom'];
        $percelTo = $_POST['parcelTo'];
        $rname = $_POST['receivername'];
        $rnumber = $_POST['rnumber'];

        addParcel($username, $percelName, $percelType, $percelFrom, $percelTo, $rname, $rnumber);
    }
} else {
    echo 'Invlaid';
}



if (isset($_POST['delete_btn'])) {
    
    if (isset($_POST['parcelID']) && isset($_POST['checked']))
    {
        $parcelID = $_POST['parcelID'];
        $result=deletePercel($parcelID);
        if($result==true)
        {
            header('location: ../view/percelHistory.php');
        }
    }
} else {
    echo '<center>Please select the CHECKBOX</center>';
}

