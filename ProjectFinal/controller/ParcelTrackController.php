<?php 

require_once("../model/parcelmgtModel.php");

if(count($_POST) > 0)
{
    $parcelID = $_POST['pars'];

    $test_query =  ParcelTrack($parcelID);

    if($test_query == true)
    {
        echo json_encode($test_query);
    }

}




?>