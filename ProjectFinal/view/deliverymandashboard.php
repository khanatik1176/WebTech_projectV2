<?php 

require_once("../model/AdminModel.php");

if($_SESSION["Role"] != 'Deliveryman' || $_SESSION["Role"] == "")
{
    header("location: ../view/userLogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/delidash.css">
    <title>Document</title>
</head>
<body>
    <form action="">
        <h2 align="center">Welcome <?php echo $_SESSION['Username']?></h2>
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="630px">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px" ><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="deliverymanNotification.php">Notifications</a> | 
                    <a href="../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td >
                    <a href="./ViewDeliveryman.php">View Profile</a>
                </td>
                <td width="1250px"></td>
            </tr>
            <tr>
                <td>
                    <a href="">Cash Withdraw</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="">Delivery History</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="">Total Earning</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="">Receiver Information</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="">Current Parcel Information</a>
                </td>
            </tr>

            <tr>
                <td>
                <a href="../view/deliverymanComplain.php">Have any Complain ? </a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>