<?php
session_start();
require_once('../../model/dbModel.php');
require_once('../../model/complainModel.php');

if (isset($_SESSION["Role"]) && $_SESSION["Role"] != 'Admin' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}

$users = viewAllComplainsMember();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="../asset/css/parcelhistoryStyle.css">
    <title>Parcel History</title>
</head>

<body>

    <form action="../controller/specificParcel.php" method="POST">
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
                    <table border="1" cellspacing="0" align="center" width="1200px" cellpadding="10">

                        <td align="center">COMPLAIN ID</td>
                        <td align="center">SENDER NAME</td>
                        <td align="center">COMPLAIN DESCRIPTION</td>
                        <td align="center">COMPLAINING DATE</td>
                </td>


                <?php for ($i = 0; $i < count($users); $i++) { ?>
                <tr>

                    <td align="center">
                        <?= $users[$i]['complainID'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['Username'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['ComplainDes'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['ComplainingDate'] ?>
                    </td>
                </tr>
            <?php } ?>
            </td>
            </tr>
        </table>
        <br><br>
        <table align="center" border="a" cellspacing="0" cellpadding="5">
            <tr>
                <td align="center">
                    <a href="../../view/admindashboard.php">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>