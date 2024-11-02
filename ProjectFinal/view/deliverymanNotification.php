<?php
require_once('../model/FunctionalitesModel.php');

if($_SESSION["Role"] != 'Deliveryman' || $_SESSION["Role"] == "")
{
    header("location: ../view/userLogin.php");
}

$notification=getDelNotification();
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
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="400px">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center" width="1200px" cellpadding="10">

                        <td align="center">notification ID</td>
                        <td align="center">notification For</td>
                        <td align="center">notification Description</td>
                        <td align="center">notification Date</td>
                        <?php for ($i = 0; $i < count($notification); $i++) { ?>
                            <tr>

                                <td align="center">
                                    <?= $notification[$i]['notificationID'] ?>
                                </td>
                                <td align="center">
                                    <?= $notification[$i]['notificationFor'] ?>
                                </td>
                                <td align="center">
                                    <?= $notification[$i]['notificationDescription'] ?>
                                </td>
                                <td align="center">
                                    <?= $notification[$i]['notificationDate'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                </td>
            </tr>
        </table>
        <br><br>
        <table align="center" border="0" cellspacing="0" cellpadding="5">
            <tr>
                <td align="center">
                    <a href="deliverymandashboard.php" style="text-decoration: none;
                    border: 1px solid black; padding:8px; border-radius:20px;
                    background-color: aqua; color: black;">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>