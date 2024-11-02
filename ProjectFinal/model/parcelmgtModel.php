<?php
require_once('dbModel.php');
require_once('AdminModel.php');
function addParcel($username, $parcelName, $percelType, $percelFrom, $percelTo, $rname, $rnumber)
{
    $con = getConnection(); // unique id generation 
    $query_id = "SELECT * FROM parcelmanagement ORDER BY parcelID DESC LIMIT 1";
    $result_id = mysqli_query($con, $query_id);

    if (!$result_id) {
        die("Error in query: " . mysqli_error($con));
    }

    $row_id = mysqli_fetch_assoc($result_id);

    if (!$row_id || empty($row_id["percelID"])) {
        $new_unique_id = "PCL1";
    } else {
        $old_id = $row_id["parcelID"];
        $last_number = intval(substr($old_id, 3));

        do {
            $last_number++;
            $new_unique_id = "PCL" . $last_number;
            $check_query = "SELECT percelID FROM parcelmanagement WHERE percelID = '$new_unique_id'";
            $check_result = mysqli_query($con, $check_query);
            $exists = mysqli_fetch_assoc($check_result);
        } while ($exists);

    }

    // Query for creating Parcel
    $sql = " insert into parcelmanagement values ( '{$new_unique_id}','{$username}','{$parcelName}','{$percelType}','{$percelFrom}','{$percelTo}',NOW(),'{$rname}','{$rnumber}','PENDING')";
    $result = mysqli_query($con, $sql);

    if ($result == true) {
        header("location: ../view/percelmgt.php");
    } else {
        echo "User can not created";
    }
}

//View Parcel

function getparcelhistory()
{
    $username = $_SESSION['Username'];
    $con = getConnection();
    $sql = "select * from parcelmanagement where senderName = '$username'";
    $result = mysqli_query($con, $sql);
    $parcels = [];

    while ($row = mysqli_fetch_array($result)) {
        array_push($parcels, $row);
    }
    return $parcels;
}

//get all parcel history(Admin)
function getAllparcelhistory()
{
    $username = $_SESSION['Username'];
    $con = getConnection();
    $sql = "select * from parcelmanagement";
    $result = mysqli_query($con, $sql);
    $parcels = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($parcels, $row);

    }
    return $parcels;

}


function getSpecificParcelHistory($id)
{
    $con = getConnection();
    $sql = "select * from parcelmanagement where parcelID = '$id'";
    $result = mysqli_query($con, $sql);
    $history = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($history, $row);
    }
    return $history;
}

function updateParcelInfo($parcelID, $NewParcelName, $newRname, $newrNumber)
{
    $con = getConnection();
    $sql = "UPDATE parcelmanagement set parcelName='{$NewParcelName}',rname='{$newRname}',rnumber='{$newrNumber}' where parcelID = '{$parcelID}'";
    $result = mysqli_query($con, $sql);
    $update = [];
    if($result==true){
        return true;
    }
}

function deletePercel($parcelID)
{
    
    $con = getConnection();
    $sql = "DELETE FROM parcelmanagement WHERE parcelID ='{$parcelID}';";
    $result = mysqli_query($con, $sql);
    $deleteparcel = [];
    if ($result == true){
        return true;
    }
}


function searchParcel($searchparcel)
{
    $con = getConnection();
    $sql = "SELECT * FROM parcelmanagement WHERE rname LIKE '%$searchparcel%';";
    $result = mysqli_query($con, $sql);
    $history = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($history, $row);
    }
    return $history;
}


function ParcelTrack($userid)
{
    $con = getConnection();
    $sql = "select * from parcelmanagement where parcelID = '{$userid}'";
    $result = mysqli_query($con, $sql);
    $tracker = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($tracker, $row);

    }
    return $tracker;

}



//get Receiver History
function getReceiverHistory()
{
    $con = getConnection();
    $sql = "SELECT senderName, parcelTo, rname, rnumber,date FROM parcelmanagement;
    ;";
    $result = mysqli_query($con, $sql);
    $career = [];
    while ($row = mysqli_fetch_array($result)) {
        array_push($career, $row);
    }
    return $career;
}
function searchParcelTable($name)
{
    $con = getConnection();
    $sql = "select * from parcelmanagement where rname = '{$name}'";
    $result = mysqli_query($con, $sql);
    $Search = [];
    while($row = mysqli_fetch_array($result))
    {
        array_push($Search, $row);
    }
    return $Search;
}
function searchReceiver($username)
{
    $con = getConnection();
    $sql = "SELECT senderName, parcelTo, rnumber FROM parcelmanagement where rname = '{$username}' ;
    ;";
    $result = mysqli_query($con, $sql);
    $career = [];
    while ($row = mysqli_fetch_array($result)) {
        array_push($career, $row);
    }
    return $career;
}

function updateParcelInfoAdmin($parcelID, $NewParcelName, $newRname, $newrNumber,$parcelStatus)
{
    $con = getConnection();
    $sql = "UPDATE percelmanagement set parcelName='{$NewParcelName}',rname='{$newRname}',rnumber='{$newrNumber}',ParcelStatus='{$parcelStatus}' where parcelID = '{$parcelID}'";
    $result = mysqli_query($con, $sql);
    $update = [];
    if($result==true){
        header('location: ../view/AdminPanel/parcelmanagementPanel.php');
    }
    return $update;
}

function deletePercelAdmin($parcelID)
{
    
    $con = getConnection();
    $sql = "DELETE FROM parcelmanagement WHERE parcelID ='{$parcelID}';";
    $result = mysqli_query($con, $sql);
    if ($result == true){
        
        return true;
    }
}

?>