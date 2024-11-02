<?php 

require_once("../model/complainModel.php");


if(isset($_POST['review-btn'])){
$name = $_POST['revname'];
$review = $_POST['reviewarea'];

if($name == "" || $review == "" )
{
    echo "Please Fill the Data Properly";
}
else{
$tester = insertReview($name,$review );

if($tester == true)
{
    echo "<script>alert('Inserted')</script>";
    header("location: ../view/deliverymandashboard.php");
}
else
{
    header("location: ../view/deliverymanReview.php");
}

}
}
?>