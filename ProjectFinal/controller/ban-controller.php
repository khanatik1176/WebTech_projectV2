<?php 

require_once('../model/AdminModel.php');

$banid = $_POST['banuser'];


if(isset($_POST['banbtn']))
{
    $stringcap =  $banid;

    if($banid == "")
    {
        echo "Please Fill data properly";
    }

    elseif($stringcap[0] == 'M' || $stringcap[0] == 'D')
    {

    
        $test = banUser($banid);

        if($test == true)
        {
        header("location:../view/admindashboard.php");

        }
    }

    else
    {
        echo "Invalid!!";
    }
}

elseif(isset($_POST['recoverbtn']))
{
    if($banid == "")
    {
        echo "Please Fill data properly";
    }

    else
    {
        $stringcap =  $banid;

        if($banid == '')
        {
            echo "Please Fill data properly";
        }
        
        elseif($stringcap[0] == 'M')
        {
            $test = RecoverUserM($stringcap);

            if($test == true)
            {
                header("location:../view/admindashboard.php");
            }
        }

        else
        {
            $test = RecoverUserD($stringcap);

            if($test == true)
            {
                header("location:../view/admindashboard.php");
            }
        }

        

       
    }

}

?>