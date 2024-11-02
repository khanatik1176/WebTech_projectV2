<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $_SESSION['email']?>
        <h2 align="center">Welcome USER</h2>
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="630px">
            <tr>
                <td width="250px"><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2"><a href="index.php">Logout?</a></td>
            </tr>
            <tr>
                <td>
                    <table border="1" cellspacing="0" cellpadding="10" height="100%" width="100%">
                        <tr>
                            <td><a href="memberdashboard.php">View Profile</a></td>
                        </tr>
                    
                </td>
                <td>
                    <form action="">
                        <table border="1" cellspacing="0" cellpadding="10" height="550px" width="500px" align="center">
                            <tr>
                                <td colspan="2" align="center">
                                    Invoice
                                </td>
                            </tr>
                            <tr>
                                <td>Invoice Number</td>
                                <td>
                                    <input type="text" name="invoiceNo" id="invoiceNo" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Invoice Issue Date:
                                </td>
                                <td>
                                    <input type="text" name="issue_date" id="issue_date" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Total Items <br>
                                    in quantity
                                </td>
                                <td><input type="text" name="quantity" id="" readonly></td>
                            </tr>
                            <tr>
                                <td>
                                    Total Amount
                                </td>
                                <td>
                                    <input type="text" name="amount" id="" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Payment Method:
                                </td>
                                <td>
                                    <input type="text" name="paymentmethod" id="" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Shipping Address:
                                </td>
                                <td>
                                    <textarea name="userAddress" id="userAddress" cols="20" rows="5" readonly></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" name="submit" id="" value="Download Invoice">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <a href="userdashboard.php">Back to menu!?</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </form>
    </td>
    </tr>

    </table>
    <script>
        function generateRandomString(length) {
            const characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            let result = '';

            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * characters.length);
                result += characters.charAt(randomIndex);
            }

            return result;
        }

        const randomString = generateRandomString(15);
        var currentDate = new Date();
        // console.log(randomString);

        document.addEventListener('DOMContentLoaded', function() {
            const invoiceNo = document.getElementById('invoiceNo');
            invoiceNo.value = randomString;

            const issue_date = document.getElementById('issue_date');
            issue_date.value = currentDate.toDateString();
            const userAddress = document.getElementById('userAddress');

            var xhr = new XMLHttpRequest();
            xhr.open('GET', '../controller/invoiceController.php', true);
    
            xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);
                    userAddress.value = data.UserAdress;
                    // alert(xhr.responseText);
                    console.log(xhr.responseText)
                } else {
                    console.error('XHR error:', xhr.statusText);
                }
            }
            };
    
            xhr.send();
            
        });
    </script>
    
</body>

</html>