<?php
require_once('../model/ComplainMemberModel.php');

if ($_SESSION["Role"] != 'Member' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}

$users = getComplainHistory();
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
            <tr>

                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center" width="1200px" cellpadding="10">

                        <td align="center">COMPLAIN ID</td>
                        <td align="center">SENDER NAME</td>
                        <td align="center">COMPLAIN DESCRIPTION</td>
                        <td align="center">COMPLAINING DATE</td>
                        <td align="center" colspan="2">OPERATION</td>
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
                    <td>
                        <a href="ComplainEdit.php?idCom=<?php echo $users[$i]['complainID'] ?>" name="edit"
                            style="color: Green; font-size:22px;"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                    <td>
                        <a href="ComplainDelete.php?idCom=<?php echo $users[$i]['complainID'] ?>" name="delete"
                            style="color: Red; font-size:22px;"><i class="fa-solid fa-trash-can"></i></a>
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
                    <a href="Memberdashboard.php">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>