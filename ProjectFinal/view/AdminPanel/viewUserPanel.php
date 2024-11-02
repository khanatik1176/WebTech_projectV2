<?php
require_once('../../model/AdminModel.php');

if ($_SESSION["Role"] != 'Admin' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php ");
}
$users = getAllUsers();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../asset/css/ViewUserAdminStyl.css">
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
                    <a href="#">Notifications</a> |
                    <a href="../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center" width="1200px" cellpadding="10">

                        <td align="center">ID</td>
                        <td align="center">NAME</td>
                        <td align="center">EMAIL</td>
                        <td align="center">Gender</td>
                        <td align="center">Date of Birth</td>
                        <td align="center">Phone Number</td>
                        <td align="center">NID Number</td>
                        <td align="center">Address</td>
                        <td align="center">Edit Profile</td>
                        <td align="center">Delete Profile</td>


                        <?php for ($i = 0; $i < count($users); $i++) { ?>
                            <tr>

                                <td align="center">
                                    <?= $users[$i]['UserID'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserName'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserEmail'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserGender'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserDateofBirth'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserPhoneNumber'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserNIDNumber'] ?>
                                </td>
                                <td align="center">
                                    <?= $users[$i]['UserAddress'] ?>
                                </td>
                                <td>
                                    <a href="#" style="color: Green;">
                                        Edit Profile
                                    </a>
                                </td>
                                <td>
                                <a href="#" style="color: red;">
                                    Delete Profile
                                </a>
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
                    <a href="../admindashboard.php" style="text-decoration: none;
                    border: 1px solid black; padding:8px; border-radius:20px;
                    background-color: aqua; color: black;">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>