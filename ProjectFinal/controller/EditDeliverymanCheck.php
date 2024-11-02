<?php 
session_start();
require_once('../model/DeliverymanModel.php');
require_once('../model/AdminModel.php');

//TO Update Deliveryman || work done on 23/11/23.

if(!isset($_POST['update']))
{
    echo "Fill All The Data.";
}

elseif(isset($_POST['update']))
{
    $Newname = $_POST['uname'];
    $NewEmail =$_POST['uemail'];
    $NewGender =$_POST['ugender'];
    $NewDOB = $_POST['udob'];
    $NewPhoneNo = $_POST['uphone'];
    $NewNIDNo = $_POST['unid'];
    $NewVehicle = $_POST['uvehi'];
    $NewAddress = $_POST['uAdd'];

    $id = $_SESSION['UserID'];
    getSpeceficDeliveryman($id);
    $test = updateDeliveryman($Newname, $NewEmail,$NewGender,$NewDOB,$NewPhoneNo,$NewNIDNo,$NewVehicle,$NewAddress);
    
    $delivery_state = updateAdminForDeliveryman($Newname,$NewEmail,$id);
    if($test == true && $delivery_state == true){


            
            
            $_SESSION['Username'] = $Newname;
            header("location: ../view/ViewDeliveryman.php");
        
        
   
    }
}

?>