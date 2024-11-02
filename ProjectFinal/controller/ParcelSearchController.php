<?php 

require_once("../model/parcelmgtModel.php");

if(count($_POST) > 0)
{
    $recname = $_POST['pars'];

    $test_query =  searchReceiver($recname);

    if($test_query == true)
    {
        echo json_encode($test_query);
    }

}




?>