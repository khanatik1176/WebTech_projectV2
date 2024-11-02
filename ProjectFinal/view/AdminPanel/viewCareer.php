<?php
require_once('../../model/FunctionalitesModel.php');

if ($_SESSION["Role"] != 'Admin' || $_SESSION["Role"] == "") {
    header("location: ../view/userLogin.php");
}
$career = getAllCarrer();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../style/style.css">
</head>

<body class="viewCareer">
    
        <h2 align="center">Welcome
            <?php echo $_SESSION['Username'] ?>
        </h2>
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="400px">
            <tr>
                <td><b>All in One Parcel Service</td>
                <td align="right" colspan="2">
                    <a href="#">Notifications</a> |
                    <a href="../../controller/logoutChecker.php">Logout?</a>
                </td>
            </tr>
            <tr>
                <td width="1250px" colspan="2">
                    <table border="1" cellspacing="0" align="center" width="1200px" cellpadding="10">

                        <td align="center">CAREER ID</td>
                        <td align="center">JOB TITTLE</td>
                        <td align="center">JOB DESCRIPTION</td>
                        <td align="center">JOB POSTING DATE</td>
                        <td align="center">ENDING SUBMIT DATE</td>
                        <td align="center">ACTION</td>
                            <?php foreach ($career as $careerItem) { 
                                $url = "../../controller/careerUpdateRedirector.php?careerid=" . $careerItem['careerID'];
                                ?>
                                <tr>
                                    
                                    <td align="center">
                                        <?= $careerItem['careerID'] ?>
                                    </td>
                                    <td align="center">
                                        <?= $careerItem['jobTittle'] ?>
                                    </td>
                                    <td align="center">
                                        <?= $careerItem['jobDescription'] ?>
                                    </td>
                                    <td align="center">
                                        <?= $careerItem['postingDate'] ?>
                                    </td>
                                    <td align="center">
                                        <?= $careerItem['endingDate'] ?>
                                    </td>
                                    <td align="center">
                                        <button onclick="updateCareer('<?php echo $careerItem['careerID']; ?>')">Edit</button>

                                        <button class="btnReset" onclick="deleteCareer('<?php echo $careerItem['careerID']; ?>')">Delete</button>
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
                    <a href="../admindashboard.php"style="text-decoration: none;
                    border: 1px solid black; padding:8px; border-radius:20px;
                    background-color: aqua; color: black;">Back to Home!?</a>
                </td>
            </tr>
        </table>

        </table>
    

    <script>
        function deleteCareer(careerid) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '../../controller/deleteCareer.php', true);

            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        alert(xhr.responseText);
                    } else {
                        alert('Error submitting the form');
                    }
                }
            };
            
            xhr.send("careerid=" + careerid);
            location.reload();
        }
        function updateCareer(careerid) {
            console.log(careerid);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '../../controller/careerUpdateRedirector.php', true);

            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        alert(xhr.responseText);

                        window.location.href = xhr.responseText;
                    } else {
                        alert('Error submitting the form');
                    }
                }
            };
            
            xhr.send("careerid=" + careerid);
            // location.reload();
        }
    </script>



</body>

</html>