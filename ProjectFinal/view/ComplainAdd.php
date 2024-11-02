<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain Add</title>
</head>
<body>
    <form method="POST" action="../controller/ComplainCheckMamber.php">
        <table border="1" cellspacing="0" cellpadding="5" align="center" width="600px" height="400px">
            <tr>
                <td align="center" colspan="2">
                    <h3>Add a Complain</h3>
                </td>
            </tr>
            <tr>
                <td>
                    Write Complain:
                </td>
                <td>
                    <textarea name="complainDes" id="" cols="50" rows="10" style="resize: none; font-size:20px;"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="addComplain" value="Add Complain">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>