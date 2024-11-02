<?php

require_once('dbModel.php');
require_once('AdminModel.php');


function createDeliveryman($username, $email, $gender, $dob, $phoneNumber, $NIDNumber, $Vehicle, $Address, $password)
{

    $con = getConnection(); // unique id generation 
    $query_id = "Select * from Deliverymanagement order by DeliverymanID desc limit 1";
    $result_id = mysqli_query($con, $query_id);
    $row_id = mysqli_fetch_assoc($result_id);
    $old_id = $row_id["DeliverymanID"];
    if ($old_id == "") {
        $new_unique_id = "DEL1";
    } else {
        $new_unique_id = substr($old_id, 3);
        $new_unique_id = intval($new_unique_id);
        $new_unique_id = "DEL" . ($new_unique_id + 1);
    }

    // Query for creating Deliveryman
    $sql = " insert into Deliverymanagement values ( '{$new_unique_id}','{$username}','{$email}','{$gender}','{$dob}','{$phoneNumber}','{$NIDNumber}','{$Vehicle}','{$Address}','{$password}','DeliveryMan')";
    $result = mysqli_query($con, $sql);
    $user_counter = 0;

    if ($result == true) {

        $user_counter = 1;

        if ($user_counter == 1) 
        {
            insertDeliveryman($new_unique_id,$username,$email,$password);
            return true;
       
        }


    } 
    else 
    {
        echo "User can not created";
        $user_counter = 0;
    }
}

function ForgetPassUpDeliveryman($email,$newpassword) //TO execute forget password of Deliveryman || work done on 23/11/23.
{

    $con = getConnection();
    $sql_del = "update deliverymanagement set DeliverymanPassword = '{$newpassword}' where DeliverymanEmail = '{$email}'";
    $result_del = mysqli_query($con, $sql_del);

    if($result_del == true)
    {
        return true;
    }

    else
    {
        echo "Invalid";
    }


}

function getSpeceficDeliveryman($id) //TO View Deliveryman || work done on 23/11/23.
{
    $con = getConnection();
    $sql = "select * from deliverymanagement where DeliverymanID = '{$id}'";
    $result = mysqli_query($con, $sql);
    $deliverymans = [];
    while ($row = mysqli_fetch_array($result)) {
        $_SESSION['DeiverymanID'] = $row['DeliverymanID'];
        $_SESSION['Dname'] = $row['DeliverymanName'];
        $_SESSION['Demail'] = $row['DeliverymanEmail'];
        $_SESSION['Dgender'] = $row['DeliverymanGender'];
        $_SESSION['Ddob'] = $row['DeliverymanDOB'];
        $_SESSION['DPhone'] = $row['DeliverymanPhoneNo'];
        $_SESSION['DNID'] = $row['DeliverymanNIDNo'];
        $_SESSION['DVehicle'] = $row['DeliverymanVehicle'];
        $_SESSION['DAddress'] = $row['DeliverymanAddress'];
        array_push($deliverymans, $row);
    }
    return $deliverymans;
}

function updateDeliveryman($name, $email, $gender, $DOB, $PhoneNo, $NIDNo, $Vech, $address)  //TO Update Deliveryman || work done on 23/11/23.
{
    $con = getConnection();
    $sql = " update deliverymanagement set DeliverymanName = '{$name}', DeliverymanEmail = '{$email}', DeliverymanGender ='{$gender}', DeliverymanDOB = '{$DOB}', DeliverymanPhoneNo = '{$PhoneNo}', DeliverymanNIDNo = '{$NIDNo}', DeliverymanVehicle = '{$Vech}', DeliverymanAddress = '{$address}' where DeliverymanID = '{$_SESSION['DeiverymanID']}';";
    
    if (mysqli_query($con, $sql)) 
    {
        return true;
    }
    
}

function deleteDeliveryman($username)
{
    $con = getConnection();
    $sql = " Delete from deliverymanagement where DeliverymanName = '{$username}';";
    $result = mysqli_query($con, $sql);


    if ($result) {
        
        $delete_State = DeleteAdminForDeliveryman($username);
        if ($delete_State) 
        {
            $_SESSION['adminDel'] = $delete_State;
        }

    } 
    
}
//getall Delivery man
function getAlldeliveryMans() 
{
    $con = getConnection();
    $sql = "select * from deliverymanagement";
    $result = mysqli_query($con, $sql);
    $username = [];
    while ($row = mysqli_fetch_array($result)) {

        array_push($username, $row);

    }
    return $username;

}





?>