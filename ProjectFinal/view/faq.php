<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../style/style.css">
</head>

<body >
        <h2 align="center">Welcome USER</h2>
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="630px">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2"><a href="index.php">Logout?</a></td>
            </tr>
            <tr>
                <td>
                    <a href="">View Profile</a>
                </td>
                <td width="1250px" rowspan="8">
                    <form method="POST" action="../controller/parcelTrackerController.php" onsubmit="submitForm(event);">
                        <table border="1" cellspacing="0" cellpadding="10" align="center">
                                <tr>
                                    <td colspan="2" align="center">Parcel Tracking System</td>
                                </tr>

                                <tr>
                                    <td>
                                        Parcel ID:
                                    </td>
                                    <td>
                                        <select name="question" id="question">
                                            <option value="" readonly> what do you want to ask?</option>
                                        </select>
                                        <input type="submit" name="submit" id="submit" value="Search">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <a href="Memberdashboard.php">Back to Menu!?</a>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    <?php
                        if(isset($_SESSION['ans'])){
                    ?>
                        <div style="text-align:center;">
                        <p><h1>Ans:</h1> <?= $_SESSION['ans']?></p>
                        </div>
                    <?php
                        }
                    ?>

                </td>
            </tr>
            <tr>
                <td>
                <a href="percelmgt.php">Parcel Management Panel</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="percelHistory.php">Parcel History</a>
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
                    <a href="faq.php">FAQ</a>
                </td>
            </tr>
        </table>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropdown = document.getElementById('question');
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '../controller/faqDataController.php', true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        var responseData = JSON.parse(xhr.responseText);

                        // Clear existing options
                        dropdown.innerHTML = '<option value="" readonly> what do you want to ask?</option>';

                        // Populate dropdown with FAQ options
                        responseData.forEach(function(faq) {
                            dropdown.innerHTML += `
                                <option value="${faq.id}">${faq.qust}</option>
                            `;
                        });

                        console.log(responseData);
                    } else {
                        alert('Error fetching data');
                    }
                }
            };

            xhr.send();
        });

        function submitForm(event) {
            event.preventDefault();

            console.log('Form submitted');

            var selectedQuestion = document.getElementById('question').value;

            if (selectedQuestion.trim() === '') {
                alert('Please select a question.');
                return false;
            }

            var formData = new FormData();
            formData.append('question', selectedQuestion);

            console.log(formData);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '../controller/faqController.php', true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                        // alert(xhr.responseText);
                        window.location.href = 'faq.php'; 
                    } else {
                        alert('Error submitting the form');
                    }
                }
            };

            xhr.send(formData);

            return false;
        }

    </script>

</body>

</html>