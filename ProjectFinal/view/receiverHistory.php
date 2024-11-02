<?php
require_once('../model/parcelmgtModel.php');

if ($_SESSION["Role"] != 'Admin' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}
$receiver = getReceiverHistory();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../asset/js/ReceverHisAjax.js"></script>
    <title>Receiver HISTORY</title>
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
                <td>
                    <form method="post" class="TrackForm">
                        <h3 class="Track-Header">Receiver History</h3>
                        <input type="text" id="track" oninput="ReceiverHistory()"
                            placeholder="Please provide the data here !">
                        <div class="result-divt hide"></div>
                    </form>

                    <br>
                    <br>
                    <br>
                </td>
            </tr>
            <tr>
                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center" width="1200px" cellpadding="10">

                        <td align="center">Parcel Sender Name</td>
                        <td align="center">Receiver Name</td>
                        <td align="center">Receiver Number</td>
                        <td align="center">Receiver Location</td>
                        <td align="center">Sending Date</td>
                        <?php for ($i = 0; $i < count($receiver); $i++) { ?>
                            <tr>

                                <td align="center">
                                    <?= $receiver[$i]['senderName'] ?>
                                </td>
                                <td align="center">
                                    <?= $receiver[$i]['rname'] ?>
                                </td>
                                <td align="center">
                                    <?= $receiver[$i]['rnumber'] ?>
                                </td>
                                <td align="center">
                                    <?= $receiver[$i]['parcelTo'] ?>
                                </td>
                                <td align="center">
                                    <?= $receiver[$i]['date'] ?>
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
                    <a href="./admindashboard.php" style="text-decoration: none;
                    border: 1px solid black; padding:8px; border-radius:20px;
                    background-color: aqua; color: black;">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>