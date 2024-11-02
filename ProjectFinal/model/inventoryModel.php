<?php

require_once('dbModel.php');
require_once('AdminModel.php');


//get number of parcel
function numberofParcel()
{
    $username = $_SESSION['Username'];
    $con = getConnection();
    $sql = "select COUNT(percelID) AS numberofParcel from percelmanagement;";
    $result = mysqli_query($con, $sql);
    $usersname = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($usersname, $row);

    }
    return $usersname;

}

//get number of member
function numberofMember()
{
    $username = $_SESSION['Username'];
    $con = getConnection();
    $sql = "select COUNT(UserID) AS numberofmember from usermanagement;";
    $result = mysqli_query($con, $sql);
    $usersname = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($usersname, $row);

    }
    return $usersname;

}

//get number of delivery man
function numberofDliveryman()
{
    $username = $_SESSION['Username'];
    $con = getConnection();
    $sql = "select COUNT(DeliverymanID) AS numberofman from deliverymanagement;";
    $result = mysqli_query($con, $sql);
    $usersname = [];
    while ($row = mysqli_fetch_array($result)) {
        array_push($usersname, $row);
    }
    return $usersname;
}













?>