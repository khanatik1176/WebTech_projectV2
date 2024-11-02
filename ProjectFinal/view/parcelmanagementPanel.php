<?php
require_once('../model/parcelmgtModel.php');

if ($_SESSION["Role"] != 'Admin' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}

$users = getAllparcelhistory();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="../asset/js/parceltrack.js"></script>
    <title>Parcel History</title>
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
                                    <form method="post"  class="TrackForm" >
                                        <h3 class="Track-Header">Track Your Parcel</h3>
                                        <input type="text"  id="track" oninput="parcel_Track()" placeholder="Please provide the data here !">
                                        <div class="result-divt hide"></div>
                                        <br>
                                        <br>
                                        <br>
                                    </form>
                </td>
            </tr>
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
                        <td align="center">Parcel Status</td>
                        <td align="center" colspan="2">Operation</td>
                </td>
                </td>


                <?php for ($i = 0; $i < count($users); $i++) { ?>
                <tr>

                    <td align="center">
                        <?= $users[$i]['parcelID'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['senderName'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['parcelName'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['parcelType'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['parcelFrom'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['parcelTo'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['date'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['rname'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['rnumber'] ?>
                    </td>
                    <td align="center">
                        <?= $users[$i]['ParcelStatus'] ?>
                    </td>
                    <td>
                        <a href="./editParcelStatus.php?IdParcel=<?php echo $users[$i]['parcelID'] ?>" name ="edit"  style="color: Green; font-size:22px;"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                    <td>
                        <a href="deleteParcelHistory.php?IdParcel=<?php echo $users[$i]['parcelID'] ?>" name ="delete" style="color: Red; font-size:22px;"><i class="fa-solid fa-trash-can"></i></a>
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
                    <a href="../view/admindashboard.php" style="text-decoration: none;
                    border: 1px solid black; padding:8px; border-radius:20px;
                    background-color: aqua; color: black;">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>