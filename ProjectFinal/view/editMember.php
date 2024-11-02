<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Member</title>
</head>

<body>
    <form method="post" action="../controller/editMemberCheck.php"
        style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right"><a href="./viewprofile.php"> Back to Dashboard </a> |<a href="index.php">Back to
                        Home!?</a></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <fieldset>
                        <form method="POST" action="../controller/editMemberCheck.php">
                            <legend>Member Update Panel</legend>
                            <table border="1" cellpadding="10" cellspacing="0">
                                <tr>
                                    <td>Name:</td>
                                    <td><input type="text" name="username" Value="<?php echo $_SESSION['memberName'] ?>"
                                            </td>
                                </tr>

                                <tr>
                                    <td>E-mail: </td>
                                    <td><input type="text" name="useremail" Value="<?php echo $_SESSION['memberEmail'] ?>"
                                            required></td>
                                </tr>

                                <tr>
                                    <td>Gender: </td>
                                    <td>
                                        <input type="text" name="usergender"
                                            Value="<?php echo $_SESSION['memberGender'] ?>" required>
                                    </td>
                </td>
            </tr>

            <tr>
                <td>Date Of Birth: </td>
                <td><input type="text" name="udob" Value="<?php echo $_SESSION['memberDateofBirth'] ?>" required></td>
            </tr>

            <tr>
                <td>Phone Number: </td>
                <td><input type="number" name="uphone" Value="<?php echo $_SESSION['memberPhoneNumber'] ?>" required></td>
            </tr>
            <tr>
                <td>NID Number: </td>
                <td><input type="number" name="unid" Value="<?php echo $_SESSION['memberNIDNumber'] ?>" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="uAdd" Value="<?php echo $_SESSION['memeberAddress'] ?>" required></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><a href="./forgetPass.php">Edit Password</a></td>
            </tr>
            <tr>

            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="update" id="" value="Update Profile">
                    <input type="reset" name="reset" id="" value="Reset">
                </td>
            </tr>

        </table>
    </form>
    </fieldset>
    </td>
    </tr>
    <tr>
        <td colspan="2" align="right">
            <p>
                Having trouble!? <br>
            <p style="color: red;">Hotline: 0987654321</p>
            </p>
        </td>
    </tr>
    </table>
    </form>
</body>

</html>