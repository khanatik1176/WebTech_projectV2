<?php

require_once('dbModel.php');
require_once('AdminModel.php');

function createMember($username, $email, $gender, $dob, $phoneNumber, $NIDNumber, $Address, $password)
{

    $con = getConnection(); // unique id generation 
    $query_id = "Select * from usermanagement order by UserID desc limit 1";
    $result_id = mysqli_query($con, $query_id);
    $row_id = mysqli_fetch_assoc($result_id);
    $old_id = $row_id["UserID"];
    if ($old_id == "") {
        $new_unique_id = "MEM1";
    } 
    else {
        $new_unique_id = substr($old_id, 3);
        $new_unique_id = intval($new_unique_id);
        $new_unique_id = "MEM" . ($new_unique_id + 1);
    }

    $sql = " insert into usermanagement values ( '{$new_unique_id}','{$username}','{$email}','{$gender}','{$dob}','{$phoneNumber}','{$NIDNumber}','{$Address}','{$password}','NONE','Member')";
    $result = mysqli_query($con, $sql);
    $user_counter = 0;

    if ($result == true) {

        $user_counter = 1;

        if ($user_counter == 1) {
            insertMember($new_unique_id,$username, $email, $password);
            return true;
        }

    } else {

        echo "User can not created";
        $user_counter = 0;
        return false;
    }
}


    function getSpeceficUser($id) //TO View Deliveryman || work done on 23/11/23.
    {
        $con = getConnection();
        $sql = "select * from usermanagement where UserID = '{$id}'";
        $result = mysqli_query($con, $sql);
        $users = [];
        while ($row = mysqli_fetch_array($result)) {
            $_SESSION['memberID'] = $row['UserID'];
            $_SESSION['memberName'] = $row['UserName'];
            $_SESSION['memberEmail'] = $row['UserEmail'];
            $_SESSION['memberGender'] = $row['UserGender'];
            $_SESSION['memberDateofBirth'] = $row['UserDateofBirth'];
            $_SESSION['memberPhoneNumber'] = $row['UserPhoneNumber'];
            $_SESSION['memberNIDNumber'] = $row['UserNIDNumber'];
            $_SESSION['memeberAddress'] = $row['UserAdress'];
            array_push($users, $row);
        }
        return $users;
    }



    // Query for creating Member 

function ForgetPassUpMember($email, $newpassword)
{
    $con = getConnection();
    $sql_mem = "update usermanagement set UserPassword = '{$newpassword}' where UserEmail = '{$email}'";
    $result_mem = mysqli_query($con, $sql_mem);

    if ($result_mem == true) {
        return true;
    } else {
        echo "Invalid";
    }
}

/* update User Information */

function updateMember($Newname, $NewEmail, $NewGender, $NewDOB, $NewPhoneNo, $NewNIDNo, $NewAddress) //Updated
{
    $con = getConnection();
    $sql = " update usermanagement set UserName = '{$Newname}', UserEmail = '{$NewEmail}', UserGender ='{$NewGender}', UserDateofBirth = '{$NewDOB}', UserPhoneNumber = '{$NewPhoneNo}', UserNIDNumber = '{$NewNIDNo}',UserAdress = '{$NewAddress}' where UserID = '{$_SESSION['memberID']}';";
    if (mysqli_query($con, $sql)) {

        return true;
    }
}

/* Delete User Information  */
function deleteUser($username) //Updated
{
    $con = getConnection();
    $sql = " Delete from usermanagement where UserName = '{$username}';";
    $result = mysqli_query($con, $sql);


    if ($result) {
        $delete_State = DeleteAdminForDeliveryman($username);
        if ($delete_State) {
            $_SESSION['adminDel'] = $delete_State;
        }
    }
}

function updatePaymentMethod($paymentMethod)
{
    $con = getConnection();
    $sql = " update usermanagement set paymentMethod = '{$paymentMethod}' where UserID = '{$_SESSION['memberID']}';";
    if (mysqli_query($con, $sql)) {

        return true;
    }
}


//get all user member information
function getAllUsers() // Members
{
    $con = getConnection();
    $sql = "select * from usermanagement where Role='Member'";
    $result = mysqli_query($con, $sql);
    $username = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($username, $row);

    }
    return $username;
}


?>