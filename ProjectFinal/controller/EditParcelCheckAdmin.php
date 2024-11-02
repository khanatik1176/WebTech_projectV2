<?php
require_once('../model/AdminModel.php');

if (isset($_POST['edit_btn'])) {
    
    if (isset($_POST['parcelID']) && isset($_POST['NewParcelName']) && isset($_POST['newRname']) && isset($_POST['newrNumber']) && isset($_POST['parcelstatus']))
    {
        $username = $_SESSION['Username'];
        $parcelId = $_POST['parcelID'];
        $NewParcelName = $_POST['NewParcelName'];
        $rname = $_POST['newRname'];
        $rnumber = $_POST['newrNumber'];
        $parcelStatus = $_POST['parcelstatus'];

        updateParcelInfoAdmin($parcelId, $NewParcelName, $rname, $rnumber,$parcelStatus);
    }
} else {
    echo 'Invlaid';
}

?>