<?php
require_once('../model/AdminModel.php');
require_once('../model/parcelmgtModel.php');

if (isset($_POST['edit_btn'])) {
    
    if (isset($_POST['parcelID']) && isset($_POST['NewParcelName']) && isset($_POST['newRname']) && isset($_POST['newrNumber']))
    {
        $username = $_SESSION['Username'];
        $parcelId = $_POST['parcelID'];
        $NewParcelName = $_POST['NewParcelName'];
        $rname = $_POST['newRname'];
        $rnumber = $_POST['newrNumber'];

        $result=updateParcelInfo($parcelId, $NewParcelName, $rname, $rnumber);

        if($result==true){
            header('location: ../view/percelHistory.php');
        }
    }
} else {
    echo 'Invlaid';
}

?>