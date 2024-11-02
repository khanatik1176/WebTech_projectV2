<?php
require_once('../../model/inventoryModel.php');

if ($_SESSION["Role"] != 'Admin' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php ");
}
$parcels = numberofParcel();
$members = numberofMember();
$deliverymans = numberofDliveryman();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
</head>

<body>
    <form action="">
        <h2 align="center">Welcome
            <?php echo $_SESSION['Username'] ?>
        </h2>
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="400px">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="#">Notifications</a> |
                    <a href="../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>

                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center">

                        <tr>
                            <td align="center">Number Of Parcel</td>
                            <?php for ($i = 0; $i < count($parcels); $i++) { ?>
                            <tr>

                                <td align="center">
                                    <?= $parcels[$i]['numberofParcel'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tr>
                        <tr>
                            <td align="center">Number Of Members</td>
                            <?php for ($i = 0; $i < count($members); $i++) { ?>
                            <tr>

                                <td align="center">
                                    <?= $members[$i]['numberofmember'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tr>
                        <tr>
                            <td align="center">Number Of DeliveryMan</td>
                            <?php for ($i = 0; $i < count($deliverymans); $i++) { ?>
                            <tr>

                                <td align="center">
                                    <?= $deliverymans[$i]['numberofman'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tr>
                    </table>
        <br><br>
        <table align="center" border="a" cellspacing="0" cellpadding="5">
            <tr>
                <td align="center">
                    <a href="../admindashboard.php">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </td>
        </tr>
        </table>
        <br><br>

        </table>
    </form>
</body>

</html>