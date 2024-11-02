<?php 

require_once("../model/AdminModel.php");

if(count($_POST) > 0)
{
    $username = $_POST['uname'];

    $test_query = searchAdminTable($username);

    if($test_query == true)
    {
        echo json_encode($test_query);
    }

}




?>