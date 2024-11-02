<?php
require_once('../model/AdminModel.php');

if ($_SESSION["Role"] != 'Admin' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}

$admin = getAdminTableDetails($_SESSION['Username'] );
//$_SESSION['Username']
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
                <td><img src="../asset/img/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="#">Notifications</a> |
                    <a href="../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="../asset/profile.png" height="150px" width="150px" align="center">
                </td>

                <td width="1250px">
                    <table border="1" cellspacing="0" align="center" cellpadding="10">

                        <td align="center">USER NAME</td>
                        <td align="center">USER EMAIL</td>
                        <td align="center">USER PASSWORD</td>
                        <td align="center">ROLE</td>

                        <?php for ($i = 0; $i < count($admin); $i++) { ?>
                            <tr>

                                <td align="center">
                                    <?= $admin[$i]['UserName'] ?>
                                </td>
                                <td align="center">
                                    <?= $admin[$i]['UserEmail'] ?>
                                </td>
                                <td align="center">
                                    <?= $admin[$i]['UserPassword'] ?>
                                </td>
                                <td align="center">
                                    <?= $admin[$i]['UserRole'] ?>
                                </td>

                            </tr>
                        <?php } ?>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <a href="./AdminPanel/editAdmin.php" style="color: Green;">Edit Profile</a>
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <a href="admindashboard.php" style="text-decoration: none;
                    border: 1px solid black; padding:8px; border-radius:20px;
                    background-color: aqua; color: black;">Go Back!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>