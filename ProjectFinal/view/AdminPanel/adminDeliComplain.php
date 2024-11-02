<?php 

require_once('../../model/complainModel.php');
session_start();
$complain_state = viewAllComplains();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../asset/js/complain-deliveryman.js"></script>
    <link rel="stylesheet" href="../../asset/complain.css">
    <title>Deliveryman Complains</title>
</head>
<body>

<div>
<form action="">
        <h2 align="center">Welcome
            <?php echo $_SESSION['Username'] ?>
        </h2>
        <table border="1" cellspacing="0" width="100%" cellpadding="2" height="100px">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="../../controller/logoutChecker.php">Logout?</a>
                </td>
        </tr>
        </table>
</div>

<div id="complain-view">
    <table class="complain-table">
        <tr class="complain-r">
            <td class="complain-d">
            <form method="post"  class="ComplainForm" >
                            <h3 class="Complain-Header">Complain List:</h3>
                            <input type="text"  id="Complain-name" oninput="viewData() " placeholder="Please provide the data here !">
                            
                            <div class="result-divc hide"></div>
                            <br>
                            <br>
                            <br>
                        </form>
            </td>
 

    </table>

    <div>
        <table border = "1" align = "center" width = 100% class="">
        </tr>

<tr>
                
                <td align="center">DeliveryMan Name</td>
                <td align="center">Complains</td>
</tr>
<?php for ($i = 0; $i < count($complain_state); $i++) { ?>

<tr>
                        <td align="center">
                            <?= $complain_state[$i]['ReviewerName'] ?>
                        </td>
                        <td align="center">
                            <?= $complain_state[$i]['Reviews'] ?>
                        </td>


</tr>
<?php } ?>
        </table>
    </div>

</div>




</body>
</html>