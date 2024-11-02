<?php 

require_once('../model/FunctionalitesModel.php');


if(isset($_POST['delete']))
{
    deleteMember($_SESSION['Username']);
}
?>


