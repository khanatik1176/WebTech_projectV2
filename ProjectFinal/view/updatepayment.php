<?php
require_once("../model/UserModel.php");

if($_SESSION["Role"] != 'Member' || $_SESSION["Role"] == "")
{
    header("location: ../view/userLogin.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
</head>

<body>
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="630px">
        <h2 align="center">Welcome <?php echo $_SESSION['Username']?></h2>
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="index.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="viewprofile.php">View Profile</a>
                </td>
                <td width="1250px" rowspan="8">
                    <form method="post" action="../controller/updatepayCheck.php">
                        <fieldset>
                            <legend>Set and Update Payment Option</legend>
                            <table border="1" cellpadding="10" cellspacing="0" align="center">
                                <tr>
                                    <td>Choose your Payment Option</td>
                                    <td>
                                        <select name="paymentMethod" id="">
                                            <option value="Card">Card</option>
                                            <option value="Bkash">Bkash</option>
                                            <option value="Nagad">Nagad</option>
                                            <option value="Rocket">Rocket</option>
                                            <option value="COD">Cash On Delivery</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" name="submit" id="" value="Save/Update">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>