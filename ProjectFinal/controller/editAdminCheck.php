<?php 

require_once('../model/FunctionalitesModel.php');


if(!isset($_POST['update']))
{
    
}

elseif(isset($_POST['update']))
{
    $Newname = $_POST['uname'];
    $NewEmail =$_POST['uemail'];
   /*  $NewGender =$_POST['ugender'];
    $NewDOB = $_POST['udob'];
    $NewPhoneNo = $_POST['uphone'];
    $NewNIDNo = $_POST['unid'];
    $NewVehicle = $_POST['uvehi'];
    $NewAddress = $_POST['uAdd']; */

    updateDeliveryman($Newname, $NewEmail,$NewGender,$NewDOB,$NewPhoneNo,$NewNIDNo,$NewVehicle,$NewAddress);
    

}

?>