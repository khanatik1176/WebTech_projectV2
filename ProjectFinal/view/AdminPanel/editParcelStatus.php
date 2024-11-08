<?php
require_once('../../model/parcelmgtModel.php');

if ($_SESSION["Role"] != 'Admin' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}

$parcelId= $_GET['IdParcel'];
$users = getSpecificParcelHistory($parcelId);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <title>Parcel History</title>
</head>

<body>
    <form action="../../controller/EditParcelCheckAdmin.php" method="POST">
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
            <tr><td colspan="2" align="center">Edit PARCEL</td></tr>
            <tr>
                    
                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center" width="100%" cellpadding="10">

                        <td align="center">PARCEL ID</td>
                        <td align="center">PARCEL SENDER NAME</td>
                        <td align="center">PARCEL NAME</td>
                        <td align="center">PARCEL TYPE</td>
                        <td align="center">PARCEL FROM</td>
                        <td align="center">PARCEL TO</td>
                        <td align="center">SENDING DATE</td>
                        <td align="center">RECEIVER Name</td>
                        <td align="center">RECEIVER Phone Number</td>
                        <td align="center">CHANGE PARCEL STATUS</td>
                </td>


                <?php for ($i = 0; $i < count($users); $i++) { ?>
                <tr>
                    
                    <td align="center">
                        <input type="text" name="parcelID" value="<?= $users[$i]['percelID'] ?>" id="" readonly>
                    </td>
                    <td align="center">
                        <?= $users[$i]['senderName'] ?>
                    </td>
                    <td align="center">
                        <input type="text" name="NewParcelName" value="<?= $users[$i]['parcelName'] ?>">
                    </td>
                    <td align="center">
                        <?= $users[$i]['percelType'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['percelFrom'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['percelTo'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['date'] ?>
                    </td>
                    <td align="center">
                        <input type="text" name="newRname" value="<?= $users[$i]['rname'] ?>">
                    </td>
                    <td align="center">
                        <input type="text" name="newrNumber" value="<?= $users[$i]['rnumber'] ?>">
                    </td>
                    <td>
                        <select name="parcelstatus" id="">
                            <option value="Accepted" style="color:green; font-size:20px;">Accepted</option>
                            <option value="In_Transite" style="color:green; font-size:20px;">In Transite</option>
                            <option value="Out_For_Delivery" style="color:green; font-size:20px;">Out For Delivery</option>
                            <option value="Delivered" style="color:green; font-size:20px;">Delivered</option>
                        </select>
                    </td>
                </tr>
            <?php } ?>
            </td>
            </tr>
            <tr>
                <td colspan="10" align="center" >
                    <input type="submit" name="edit_btn" value="UPDATE DATA">
                </td>
            </tr>
        </table>
        <br><br>
        <table align="center" border="a" cellspacing="0" cellpadding="5">
            <tr>
                <td align="center">
                    <a href="parcelmanagementPanel.php">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>