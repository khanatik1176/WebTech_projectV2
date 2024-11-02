<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>
    <form method="post" action="../controller/EditDeliverymanCheck.php"
        style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right"><a href="./AdminPanel/editAdmin.php"> Back to Dashboard </a> |<a href="index.php">Back
                        to
                        Home!?</a></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <fieldset>
                        <form method="post" action="../controller/editAdminCheck.php">
                            <legend>Admin Update Panel</legend>
                            <table border="1" cellpadding="10" cellspacing="0">
                                <!-- <tr>
                                    <td>Name:</td>
                                    <td><input type="text" name="uname" Value="<?php echo $_SESSION['UserName'] ?>"
                                            required></td>
                                </tr> -->

                                <tr>
                                    <td>E-mail: </td>
                                    <td><input type="text" name="uemail" Value="<?php echo $_SESSION['UserEmail'] ?>"
                                            required></td>
                                </tr>


                                <td colspan="2" align="center"><a href="../forgetPass.php">Edit Password</a></td>

            </tr>
            <tr>

            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="update" id="" value="Update Profie">
                    <input type="reset" name="reset" id="" value="Reset">
                </td>
            </tr>

        </table>
    </form>
    </fieldset>
    </td>
    </tr>
    </table>
    </form>
</body>

</html>