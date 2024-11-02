<?php
require_once('../model/ComplainMemberModel.php');

if ($_SESSION["Role"] != 'Member' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}

$idCom= $_GET['idCom'];
$users = getSpecificComplainHistory($idCom);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcel History</title>
</head>

<body>
    <form action="../controller/ComplainCheckMamber.php" method="POST">
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
            <tr><td colspan="2" align="center">Remove Complain</td></tr>
            <tr>
                    
                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center" width="1200px" cellpadding="10">

                        <td align="center">COMPLAIN ID</td>
                        <td align="center">SENDER NAME</td>
                        <td align="center">COMPLAIN DESCRIPTION</td>
                        <td align="center">COMPLAING DATE</td>
                </td>


                <?php for ($i = 0; $i < count($users); $i++) { ?>
                    <tr>
                    
                    <td align="center">
                        <input type="text" name="complainID" value="<?= $users[$i]['complainID'] ?>" id="" readonly>
                    </td>
                    <td align="center">
                        <?= $users[$i]['Username'] ?>
                    </td>
                    <td align="center">
                        <input type="text" name="newComplainDes" <?= $users[$i]['ComplainDes'] ?>>
                    </td>
                    <td>
                    <?= $users[$i]['ComplainingDate'] ?>
                    </td>
                </tr>
            <?php } ?>
            </td>
            </tr>
            <tr>
                <td colspan="9" align="center">
                    <input type="checkbox" name="checked" id="">I confirm to delete this percel.
                </td>
            </tr>
            <tr>
                <td colspan="9" align="center" >
                    <input type="submit" name="delete_btn" value="Remove Complain">
                </td>
            </tr>
        </table>
        <br><br>
        <table align="center" border="a" cellspacing="0" cellpadding="5">
            <tr>
                <td align="center">
                    <a href="ComplainHistory.php">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>