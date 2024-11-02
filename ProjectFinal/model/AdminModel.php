<?php 

require_once('dbModel.php');
require_once('UserModel.php');
session_start();

function insertMember($id,$username,$email,$password) //TO insert Member in admin table || work done on 23/11/23.
{
    $con = getConnection();
    
    $sql_admin = "insert into adminmanagement values ('{$id}','{$username}','{$email}','{$password}','Member')";
    $result_admin = mysqli_query($con, $sql_admin);
    return true;
}

function login($useremail, $userpassword) //TO Login  || work done on 23/11/23.
{
    $con = getConnection();
    $sql = "select * from adminmanagement where Useremail ='{$useremail}' and Userpassword='{$userpassword}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $_SESSION['RowPicker'] = $row;
    if($result)
    {

        return true;
    }
}

function insertDeliveryman($id,$username,$email,$password) //TO insert Deliveryman in admin table || work done on 23/11/23.
{
    $con = getConnection();
  
    $sql_admin = "insert into adminmanagement values ('{$id}','{$username}','{$email}','{$password}','Deliveryman')";
    $result_admin = mysqli_query($con, $sql_admin);
    return true;
}

function forgetPassword($email)
{
    $con = getConnection();
    $sql = "select * from adminmanagement where UserEmail ='{$email}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $_SESSION['PassPicker'] = $row;

    if($result)
    {

        return true;
    }


}

function ForgetPassUpAdmin($email,$newpassword) // To update member password in admin table 23/11/23
{

    $con = getConnection();
    $sql_ad = "update adminmanagement set UserPassword = '{$newpassword}' where UserEmail = '{$email}'";
    $result_ad = mysqli_query($con, $sql_ad);

    if($result_ad == true)
    {
        return true;
    }

    else
    {
        echo "Invalid";
    }


}

function getAdminTableDetails($name) // To update admin password
{
    $con = getConnection();
    $sql = "select * from adminmanagement where UserName = '{$name}'";
    $result = mysqli_query($con, $sql);
    $admins = [];
    while ($row = mysqli_fetch_array($result)) {
        $_SESSION['AdminID'] = $row['UserID'];
        $_SESSION['AdminName'] = $row['UserName'];
        $_SESSION['AdminEmail'] = $row['UserEmail'];
        $_SESSION['AdminPassword'] = $row['UserPassword'];
        $_SESSION['AdminRole'] = $row['UserRole'];
        array_push($admins, $row);
    }
    return $admins;

}


function updateAdminForDeliveryman($name,$email,$id) // TO update deliveryman
{
        $con = getConnection();
        $sql = " update adminmanagement set UserName = '{$name}', UserEmail = '{$email}'  where UserID = '{$id}';";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        
}

function DeleteAdminForDeliveryman($name) // To delete deliveryman 
{
    $con = getConnection();
    $sqlad = " Delete from adminmanagement where UserName = '{$name}';";
    $resultad = mysqli_query($con, $sqlad);

        $_SESSION['adminDel'] = $resultad;

        if($resultad)
        {
            return  true;
        }  
}

function updateAdminForUser($Newname,$NewEmail,$id) // TO update User 
{
        $con = getConnection();
        $sql = " update adminmanagement set UserName = '{$Newname}', UserEmail = '{$NewEmail}'  where UserID = '{$id}';";
        
        if(mysqli_query($con, $sql))
        {  
            return true;
        }  
}

// query for live search 
function searchAdminTable($name)
{
    $con = getConnection();
    $sql = "select * from adminmanagement where UserName = '{$name}'";
    $result = mysqli_query($con, $sql);
    $Search = [];
    while($row = mysqli_fetch_array($result))
    {
        array_push($Search, $row);
    }
    return $Search;
}




//get all deliveryman information

/* //get Receiver History
function getReceiverHistory()
{
    $con = getConnection();
    $sql = "SELECT senderName, percelTo, rname, rnumber,date FROM percelmanagement;
    ;";
    $result = mysqli_query($con, $sql);
    $career = [];
    while ($row = mysqli_fetch_array($result)) {
        array_push($career, $row);
    }
    return $career;
} */


//Update Parcel For Admin





//ban user 

function banUser($id) // TO update deliveryman
{
        $con = getConnection();
        $sql = " update adminmanagement set UserRole = 'Banned' where UserID = '{$id}';";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        
}

function RecoverUserM($id) // TO update deliveryman
{
        $con = getConnection();
        $sql = " update adminmanagement set UserRole = 'Member' where UserID = '{$id}';";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        
}

function RecoverUserD($id) // TO update deliveryman
{
        $con = getConnection();
        $sql = " update adminmanagement set UserRole = 'Deliveryman' where UserID = '{$id}';";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        
}

?>