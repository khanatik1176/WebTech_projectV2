<?php 

require_once('../model/DeliverymanModel.php');


if(isset($_POST['delete']))
{
    deleteDeliveryman($_SESSION['Dname']);

    $deleteDeli = $_SESSION['adminDel'];
    if($deleteDeli)
    {
        session_destroy();
        header("location: ../view/userLogin.php");
    }

    else
    {
        echo "User Can not be deleted";
    }
}


?>


