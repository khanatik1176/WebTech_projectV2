<?php
require_once('dbModel.php');
require_once('AdminModel.php');


function addNotification($notificationFor, $notDes)
{
    $con = getConnection(); // unique id generation 
    $query_id = "Select * from notificationpanel order by notificationID desc limit 1";
    $result_id = mysqli_query($con, $query_id);
    $row_id = mysqli_fetch_assoc($result_id);
    $old_id = $row_id["notificationID"];
    if ($old_id == "") {
        $new_unique_id = "NOT1";
    } else {
        $new_unique_id = substr($old_id, 3);
        $new_unique_id = intval($new_unique_id);
        $new_unique_id = "NOT" . ($new_unique_id + 1);
    }

    // Query for creating Notification
    $sql = " insert into notificationpanel values ( '{$new_unique_id}','{$notificationFor}','{$notDes}',NOW())";
    $result = mysqli_query($con, $sql);
    if ($result == true) {
        //echo "Adding Notification Successfully";
        header("./addNotification.php");
    } else {
        echo "could Not Created";
    }
}

//get all notification
function getAllNotification()
{
    $con = getConnection();
    $sql = "select * from notificationpanel;";
    $result = mysqli_query($con, $sql);
    $notification = [];
    while ($row = mysqli_fetch_array($result)) {
        array_push($notification, $row);
    }
    return $notification;
}


//get member notification
function getMemberNotification()
{
    $con = getConnection();
    $sql = "select * from notificationpanel where notificationFor='Member' ;";
    $result = mysqli_query($con, $sql);
    $notification = [];
    while ($row = mysqli_fetch_array($result)) {
        array_push($notification, $row);
    }
    return $notification;
}

//get deliveryman notification
function getDelNotification()
{
    $con = getConnection();
    $sql = "select * from notificationpanel where notificationFor='DeliveryMan' ;";
    $result = mysqli_query($con, $sql);
    $notification = [];
    while ($row = mysqli_fetch_array($result)) {
        array_push($notification, $row);
    }
    return $notification;
}













?>