<?php 

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../asset/js/parceltrack.js"></script>
    <link rel="stylesheet" href="../asset/parcel_track.css">
    <title>Document</title>
</head>

<body>
    <form action="">
        <h2 align="center">Welcome <?php echo $_SESSION['Username'] ?></h2>
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="630px">
            <tr>
                <td><b>All in One Parcel Service</td>
                <td align="right" colspan="2"><a href="index.php">Logout?</a></td>
            </tr>
            <tr>
                <td>
                    <a href="">View Profile</a>
                </td>
                <td width="1250px" rowspan="8">
                       
                            <table border="1" cellspacing="0" cellpadding="10" align="center" width = 80% height = 80%>
                                <tr>
                                    <td colspan="2" align="center">Parcel Tracking System</td>
                                </tr>

                                    <tr>
                                    <td rowspan="10" class = "Track-data">
                                    <form method="post"  class="TrackForm" >
                                        <h3 class="Track-Header">Track Your Parcel</h3>
                                        <input type="text"  id="track" oninput="parcel_Track()" placeholder="Please provide the data here !">
                                        <div class="result-divt hide"></div>
                                        <br>
                                        <br>
                                        <br>
                                    </form>
                                    </tr>
                                
                            </table>
                        
                </td>
            </tr>
            <tr>
                <td>
                <a href="percelmgt.php">Parcel Management Panel</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="oderhistory.php">Order History</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="parceltrack.php">Parcel Tracker</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="invoice.php">Invoice</a>
                </td>
            </tr>

            <tr>
                <td>
                    <a href="">Set/Update Payment Option</a>
                </td>

            </tr>

            <tr>
                <td>
                    <a href="">Assigned Delivery Man</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>