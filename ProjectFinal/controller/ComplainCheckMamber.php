<?php
require_once('../model/AdminModel.php');
require_once('../model/ComplainMemberModel.php');
if (isset($_POST['addComplain'])) {
    
    if (isset($_POST['complainDes']))
    {
        $username = $_SESSION['Username'];
        $complainDes = $_POST['complainDes'];
        addComplain($username,$complainDes);
    }
} else {
    echo 'Invlaid';
}



if (isset($_POST['delete_btn'])) {
    
    if (isset($_POST['complainID']))
    {
        $complainID = $_POST['complainID'];
        $result=deleteComplain($complainID);
        if($result==true)
        {
            header('location: ../view/ComplainHistory.php');
        }
    }
} else {
    echo '<center>Please select the CHECKBOX</center>';
}

