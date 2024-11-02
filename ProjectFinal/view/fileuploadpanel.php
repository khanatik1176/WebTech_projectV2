<?php 

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/fileup.css">
    <title>Document</title>
</head>
<body>
    <table align="center">

        <tr>

        <td class="uptd" >
                    <form method="post" action="../controller/uploadController.php" enctype="multipart/form-data">
                        <fieldset>
                        <label for="">File Upload Panel</label><br><br>
                        
                        Upload File: <input type="file" name="upfile" id="">  <br>
                        <input type="submit"  name="upsub"  value="Upload"> <br>
                        <a href="../view/admindashboard.php">Back to admindashboard</a>

                        </fieldset>
                    </form>


        </td>






        </tr>




    </table>
</body>
</html>
