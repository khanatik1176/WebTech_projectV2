<?php
require_once('../model/DeliverymanModel.php');

if ($_SESSION["Role"] != 'Deliveryman' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}

$deliverymans = getSpeceficDeliveryman($_SESSION['UserID']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <h2 align="center">Welcome
            <?php echo $_SESSION['Username'] ?>
        </h2>
        <table class="tb_1" border="1" cellspacing="0" width="100%" cellpadding="10" height="400px">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="deliverymanNotification.php">Notifications</a> |
                    <a href="../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center" cellpadding="5">
                       
                        <td align="center">ID</td>
                        <td align="center">NAME</td>
                        <td align="center">EMAIL</td>
                        <td align="center">Gender</td>
                        <td align="center">Date of Birth</td>
                        <td align="center">Phone Number</td>
                        <td align="center">NID Number</td>
                        <td align="center">Vehicle</td>
                        <td align="center">Address</td>

                        <?php for ($i = 0; $i < count($deliverymans); $i++) { ?>
                            <tr>

                                <td align="center">
                                    <?= $deliverymans[$i]['DeliverymanID'] ?>
                                </td>
                                <td align="center">
                                    <?= $deliverymans[$i]['DeliverymanName'] ?>
                                </td>
                                <td align="center">
                                    <?= $deliverymans[$i]['DeliverymanEmail'] ?>
                                </td>
                                <td align="center">
                                    <?= $deliverymans[$i]['DeliverymanGender'] ?>
                                </td>
                                <td align="center">
                                    <?= $deliverymans[$i]['DeliverymanDOB'] ?>
                                </td>
                                <td align="center">
                                    <?= $deliverymans[$i]['DeliverymanPhoneNo'] ?>
                                </td>
                                <td align="center">
                                    <?= $deliverymans[$i]['DeliverymanNIDNo'] ?>
                                </td>
                                <td align="center">
                                    <?= $deliverymans[$i]['DeliverymanVehicle'] ?>
                                </td>
                                <td align="center">
                                    <?= $deliverymans[$i]['DeliverymanAddress'] ?>
                                </td>
                            </tr>


                        <?php } ?>
                </td>
            </tr>
            <tr>
                <td colspan="18" align="center">
                    <table border="1" cellspacing="0" cellpadding="5">
                        <tr>
                            <td >
                            <a href="./EditDeliveryman.php" style="color:green;">Edit Profile
                            </td>
                            <td>
                            <a href="./DeleteDeliveryman.php" style="color: Red;">Delete Profile</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="18" align="center">
                    <a href="deliverymandashboard.php" style="text-decoration: none;
                    border: 1px solid black; padding:8px; border-radius:20px;
                    background-color: aqua; color: black;">Go Back!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>