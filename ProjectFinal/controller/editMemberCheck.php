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
    $Newname = $_POST['username'];
    $NewEmail =$_POST['useremail'];
    $NewGender =$_POST['usergender'];
    $NewDOB = $_POST['udob'];
    $NewPhoneNo = $_POST['uphone'];
    $NewNIDNo = $_POST['unid'];
    $NewAddress = $_POST['uAdd'];

    $id = $_SESSION['UserID'];
    getSpeceficUser($id);
    $tester = updateMember($Newname, $NewEmail,$NewGender,$NewDOB,$NewPhoneNo,$NewNIDNo,$NewAddress);

    $user_state = updateAdminForUser($Newname,$NewEmail,$id);

    if($tester == true && $user_state == true){
        $_SESSION['Username'] = $Newname;
        header("location: ../view/Viewprofile.php");
}

}

?>