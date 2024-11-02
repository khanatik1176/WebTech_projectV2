<?php 

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
</head>
<body>
    <form method = "post" action="../controller/DeleteDeliverymanCheck.php">
        <h2 align="center">Welcome <?php echo $_SESSION['Username']?></h2>
        <table border="1" cellspacing="0" width="100%" cellpadding="1" height="200px">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px" ><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="#">Notifications</a> | 
                    <a href="../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td >
                    <img src ="../asset/istockphoto-944930194-612x612.jpg" height = "250px" width = "250px" align = "center">
                </td>
                
                <td width="4050px" style = "color: red" align = 'Top'>
                Are you sure you want to delete your account ??!! </br></br>

                <input type="submit" name="delete" id="" value="Delete Profie" >
    
                </td>
            </tr>
        </table>
        </table>
    </form>
</body>
</html>