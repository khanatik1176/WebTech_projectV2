<?php

if ((isset($_COOKIE['UserEmail'])) && (isset($_COOKIE['UserPass']))) {
    $Email = $_COOKIE['UserEmail'];
    $Password = $_COOKIE['UserPass'];
} else {
    $Email = "";
    $Password = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../asset/js/login.js"></script>
    <link rel="stylesheet" href="../asset/css/loginStyle.css">
    <title>Login</title>
</head>

<body>
    <form  onsubmit="return IsvalidForm()" method="post" action="../controller/LoginChecker.php"
        style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        <table border="1" cellspacing="0" cellpadding="5" width="100%">
            <tr>
                <td colspan=""><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right"><a href="index.php">Back to Home!?</a></td>
            </tr>

            <tr>
                <td colspan="2">
                    <fieldset>
                        <Legend>User Login Panel</Legend>
                        <table border="1" cellpadding="15" cellspacing="0" align="center">
                            <tr>
                                <td>E-mail</td>
                                <td><input type="text" name="email" id="lemail"  onkeyup="isValidEmail()" value="<?php echo $Email ?>"></br><small id = "EmailError" style="color: red;"></small></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" id="password" onkeyup="isValidPassword()" value="<?php echo $Password ?>"></br><small id = "PassError" style="color:red"></small></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="checkbox" name="check" id="">Remember Me!
                                </td>
                            </tr>
                            <tr>
                                <td align="center" colspan="2">
                                    <input type="submit" name="logsubmit" id="" value="LOGIN">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <a href="forgetPass.html"> forget password!?</a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <a href="Picker.php">Don't have an Account?</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>