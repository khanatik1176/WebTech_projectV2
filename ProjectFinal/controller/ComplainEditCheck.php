<?php
require_once('../model/AdminModel.php');
require_once('../model/ComplainMemberModel.php');

if (isset($_POST['edit_btn'])) {
    
    if (isset($_POST['complainID']) && isset($_POST['newComplainDes']))
    {
        $username = $_SESSION['Username'];
        $complainID = $_POST['complainID'];
        $complainDes = $_POST['newComplainDes'];

        $result=updateComplainInfo($complainID, $complainDes);

        if($result==true){
            header('location: ../view/ComplainHistory.php');
        }
    }
    else{
        echo "Something was wrong";
    }
} else {
    echo 'Invlaid';
}

?>