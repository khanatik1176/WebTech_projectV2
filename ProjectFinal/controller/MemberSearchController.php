<?php 

require_once("../model/parcelmgtModel.php");

if(count($_POST) > 0)
{
    $username = $_POST['uname'];

    $test_query = searchParcelTable($username);

    if($test_query == true)
    {
        echo json_encode($test_query);
    }

}




?>