<?php 

require_once("../model/complainModel.php");

if(count($_POST) > 0)
{
    $username = $_POST['uname'];

    $test_query = viewComplains($username);
    if($test_query == true)
    {
        echo json_encode($test_query);
    }

}




?>