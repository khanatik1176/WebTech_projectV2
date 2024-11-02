<?php 

require_once('../model/AdminModel.php');
require_once('../model/UserModel.php');
require_once('../model/DeliverymanModel.php');


$Email = $_POST['email'];
$Password = $_POST['password'];
$Repass = $_POST['repassword'];

if($Email == "" || $Password == "" || $Repass = "" )
{
    echo "Invalid Email or password!"; 
}
else
{
    $state_checker = forgetPassword($Email);
    if($state_checker == true)
    {
        $row = $_SESSION['PassPicker'];

        if(isset($_POST['Forgetsubmit']))
        {
            if($row["UserRole"] == "Admin")
            {
                $counter = ForgetPassUpAdmin($Email,$Password);
                if($counter)
                {
                    header("location: ../view/userlogin.php");
                }

                else
                {
                    echo "Error 404";
                }
            }

            elseif($row["UserRole"] == "Member")
            {
                $counter_member = ForgetPassUpMember($Email,$Password);
                
                if($counter_member)
                {
                    $state_Admin = ForgetPassUpAdmin($Email,$Password);
                    if($state_Admin)
                    {
                        header("location: ../view/userlogin.php");
                    }
                    else
                    {
                    echo "Error 404";

                    }
                }
                
            }

            elseif($row["UserRole"] == "Deliveryman")
            {
                $counter_Deliveryman = ForgetPassUpDeliveryman($Email,$Password);
                
                if($counter_Deliveryman)
                {
                    $state_Admin = ForgetPassUpAdmin($Email,$Password);
                    if($state_Admin)
                    {
                        header("location: ../view/userlogin.php");
                    }

                    else
                    {
                    
                        echo "Error 404";
                    }
                }
                
            }


        }
    }

}

?>