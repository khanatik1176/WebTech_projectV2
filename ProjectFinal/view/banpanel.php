
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../asset//js/ban.js"></script>
    <link rel="stylesheet" href="../asset/css/ban.css">
    <title>Document</title>
</head>
<body>
    <table align="center">

        <tr>

        <td>
                    <form  onsubmit="return IsvalidForm()" method="post" action="../controller/ban-controller.php">
                        <fieldset>
                        <label for="">Admin Ban System</label><br><br>
                        
                        User ID <input type="text" name="banuser" id="uid" onkeyup="isValidUser()" placeholder="Please provide the id here"> <br><small id = "UserError" style ="color: red"></small><br>
                        <input type="submit"  name="banbtn"  value="Ban"> 
                        <input type="submit"  name="recoverbtn"  value="Unban"><br>
                        <a href="../view/admindashboard.php">Back to dashboard</a>

                        </fieldset>
                    </form>


        </td>






        </tr>




    </table>
</body>
</html>


                    
                        

                   
         
      





