<?php 

require_once("../model/AdminModel.php");
require_once('../model/DeliverymanModel.php');

if($_SESSION["Role"] != 'Deliveryman' || $_SESSION["Role"] == "")
{
    header("location: ../view/userLogin.php");
}
$deliverymans = getSpeceficDeliveryman($_SESSION['UserID']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/deliverymanreview.css">
    <script src="../asset/js/delicomplain.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="">
        <h2 align="center">Welcome <?php echo $_SESSION['Username']?></h2>
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="100px">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px" ><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="deliverymanNotification.php">Notifications</a> | 
                    <a href="../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
        </table>
    </form>
    <div class = "Review-div">
    <form class="reviewform" onsubmit="return IsvalidForm()" method="post" action = '../controller/complain-controller.php'>
        
        <h1 class="complain-header"> Write Your Complain</h1>    

           Name: <input type="text" name="revname" class="revname"  value="<?php echo $_SESSION['Dname'] ?>" readonly> <br>
           Complain: <textarea  name="reviewarea" class="reviewarea" id="comarea" onkeyup = "isValidComplain()" ></textarea></br><small id ="ErrorAddress" style="color: red;"></small><br>
           <button type="submit"  name="review-btn"  class="review-btn"  >Review</button>
    </form>
    </div>
</body>
</html>