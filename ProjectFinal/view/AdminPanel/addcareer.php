<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/AddParcelStyle.css">
    <title>Adding Career</title>
    <script>
        function validateForm() {
            var jobTitle = document.getElementById('jobtitle').value;
            var jobDes = document.getElementById('jobDes').value;
            var postdate = document.getElementById('postdate').value; 
            var endDate = document.getElementById('endDate').value; 

            if (jobTitle.trim() === '') {
                alert('Please enter a job title');
                return false;
            }

            if (jobDes.trim() === '') {
                alert('Please enter a job description');
                return false;
            }

            if (postdate.trim() === '') {
                alert('Please enter a posting date');
                return false;
            }

            if (endDate.trim() === '') {
                alert('Please enter a Deadline');
                return false;
            }

            return true;
        }


        function submitForm() {
            if (validateForm()) {
                var form = document.getElementById('careerForm');
                var formData = new FormData(form);

                var xhr = new XMLHttpRequest();
                xhr.open('POST', '../../controller/careerPanelcheck.php', true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            alert(xhr.responseText);
                        } else {
                            alert('Error submitting the form');
                        }
                    }
                };

                xhr.send(formData);
            }

            return false;
        }
    </script>
    
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body class="careeradd">
    <form id="careerForm" method="POST" action="javascript:void(0);" onsubmit="submitForm();">
        <table border="1" cellspacing="0" cellpadding="8" align="center" width="100%" height="600px">
            <tr>
                <td align="center">
                Career Management System
                </td>
                <td align="right">
                    <a href="notificationPanel.php" >Notification</a>&nbsp;||
                    <a href="../../controller/logoutChecker.php">Logout!?</a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <table border="1" cellspacing="0" cellpadding="8" align="center" width="450px" height="250px">
            <tr>
                <td colspan="2" align="center" ><h3>ADDING CAREER..</h3>
                </td>
            </tr>
            <tr>
                <td>
                    Job Tittle:
                </td>
                <td>
                    <input type="text" name="jobTitle" id="jobtitle">
                </td>
            </tr>
            <tr>
                <td>
                    Job Description:
                </td>
                <td>
                    <textarea name="jobDes" id="jobDes" cols="30" rows="5"></textarea>
                </td>
            </tr>

            <tr>
                <td>
                    Posting Date:
                </td>
                <td>
                    <input type="date" name="postdate" id="postdate">
                </td>
            </tr>
            <tr>
                <td>
                    Ending Submit Date:
                </td>
                <td>
                    <input type="date" name="endDate" id="endDate">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input class="btnSubmit" type="submit" name="submit" value="Add Job">
                    <input class="btnReset" type="reset" name="reset" value="Reset Form">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>