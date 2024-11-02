<?php
require_once('../model/parcelmgtModel.php');

if ($_SESSION["Role"] != 'Member' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}

$users = getparcelhistory();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="../asset/css/parcelhistoryStyle.css">
    <style>
        #divSearch input {
            width: 200px;
            border: 1px solid black;
            border-radius: 15px;
            font-size: 18px;
            padding: 10px;
            background-color: aquamarine;
        }

        #sumbmitValue input {
            border: 1px solid green;
            background: green;
            color: white;
            border-radius: 15px;
            font-size: 18px;
            padding: 10px;
            width: 100px;
        }

        div {
            padding: 5px 5px ;
            display: inline-block;
            justify-content: space-between;
        }
    </style>
    <title>Parcel History</title>
</head>

<body>
    <form action="../controller/specificParcel.php" method="POST">
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
                <td colspan="2" align="center">
                    <div id="divSearch">
                        <label for="Search">Search Parcel By Receiver Name</label>
                        <input type="text" name="searchParcel" id="text" placeholder="Receiver Name">
                    </div>
                    <div id="sumbmitValue">
                        <input type="submit" name="submit" id="" Value="Submit">
                    </div>
                </td>
            </tr>
            <tr>

                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center" width="1200px" cellpadding="10">

                        <td align="center">PARCEL ID</td>
                        <td align="center">PARCEL SENDER NAME</td>
                        <td align="center">PARCEL NAME</td>
                        <td align="center">PARCEL TYPE</td>
                        <td align="center">PARCEL FROM</td>
                        <td align="center">PARCEL TO</td>
                        <td align="center">SENDING DATE</td>
                        <td align="center">RECEIVER NAME</td>
                        <td align="center">RECEIVER PHONE NUMBER</td>
                        <td align="center">PARCEL STATUS</td>
                        <td align="center" colspan="2">OPERATION</td>
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
                        <a href="EditParcelUser.php?IdParcel=<?php echo $users[$i]['parcelID'] ?>" name="edit"
                            style="color: Green; font-size:22px;"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                    <td>
                        <a href="deleteparcel.php?IdParcel=<?php echo $users[$i]['parcelID'] ?>" name="delete"
                            style="color: Red; font-size:22px;"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            <?php } ?>
            </td>
            </tr>
        </table>
        <br><br>
        <table align="center" border="a" cellspacing="0" cellpadding="5">
            <tr>
                <td align="center">
                    <a href="Memberdashboard.php">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    </form>
</body>

</html>