<?php 


if(isset($_POST['upsub']))
{
    $filename = $_FILES['upfile']['name'];
    $file_temp = $_FILES['upfile']['tmp_name'];
    

    $destination = "../upfiles/" . $filename;

    if(move_uploaded_file($file_temp, $destination))
    {
        setcookie("Filename", $filename, time() + 3000000000, "/");
        
        $flag = true;
        echo "<script>alert('File uploaded successfully.')</script>";
        if ($flag)
        {
         echo "<script>window.location.href = '../view/admindashboard.php';</script>";
                        
        }
    }
    else
    {
        echo "Failed";
    }
}






?>