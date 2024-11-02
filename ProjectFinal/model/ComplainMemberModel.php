<?php
require_once('dbModel.php');
require_once('AdminModel.php');

function addComplain($username, $complainDes)
{
    $con = getConnection(); // unique id generation 
    $query_id = "SELECT * FROM membercomplain ORDER BY complainID DESC LIMIT 1";
    $result_id = mysqli_query($con, $query_id);

    if (!$result_id) {
        die("Error in query: " . mysqli_error($con));
    }

    $row_id = mysqli_fetch_assoc($result_id);

    if (!$row_id || empty($row_id["complainID"])) {
        $new_unique_id = "COM1";
    } else {
        $old_id = $row_id["complainID"];
        $last_number = intval(substr($old_id, 3));

        do {
            $last_number++;
            $new_unique_id = "COM" . $last_number;
            $check_query = "SELECT complainID FROM membercomplain WHERE complainID = '$new_unique_id'";
            $check_result = mysqli_query($con, $check_query);
            $exists = mysqli_fetch_assoc($check_result);
        } while ($exists);

    }

    // Query for creating Complain
    $sql = " insert into membercomplain values ( '{$new_unique_id}','{$username}','{$complainDes}',NOW())";
    $result = mysqli_query($con, $sql);

    if ($result == true) {
        header("location: ../view/ComplainHistory.php");
    } else {
        echo "User can not created";
    }
}


function getComplainHistory()
{
    $username = $_SESSION['Username'];
    $con = getConnection();
    $sql = "select * from membercomplain where Username = '$username'";
    $result = mysqli_query($con, $sql);
    $parcels = [];

    while ($row = mysqli_fetch_array($result)) {
        array_push($parcels, $row);
    }
    return $parcels;
}


function getSpecificComplainHistory($id)
{
    $con = getConnection();
    $sql = "select * from membercomplain where complainID = '$id'";
    $result = mysqli_query($con, $sql);
    $history = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($history, $row);
    }
    return $history;
}

function updateComplainInfo($complainID, $NewComplain)
{
    $con = getConnection();
    $sql = "UPDATE membercomplain set ComplainDes='{$NewComplain}' where complainID = '{$complainID}'";
    $result = mysqli_query($con, $sql);
    $update = [];
    if($result==true){
        return true;
    }
}

function deleteComplain($complainID)
{
    
    $con = getConnection();
    $sql = "DELETE FROM membercomplain WHERE complainID ='{$complainID}';";
    $result = mysqli_query($con, $sql);
    $deleteparcel = [];
    if ($result == true){
        return true;
    }
}

?>