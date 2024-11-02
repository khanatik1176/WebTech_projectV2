<?php
require_once('../model/AdminModel.php');
$Login_email = $_POST['email'];
$Login_password = $_POST['password'];



if ($Login_email == "" || $Login_password == "") {
    echo "Invalid Email or password!";
} else {

    $status_checker = login($Login_email, $Login_password);

    if ($status_checker == true) {
        $row = $_SESSION['RowPicker'];
        if (isset($_POST['logsubmit'])) {
            if (!is_null($row) && $row["UserRole"] == "Admin") {
                $_SESSION['Username'] = $row['UserName'];
                $_SESSION['UserEmail'] = $row['UserEmail'];
                $_SESSION['UserPass'] = $row['UserPassword'];
                $_SESSION['UserID'] = $row['UserID'];
                $_SESSION['Role'] = 'Admin';

                if (!empty($_POST["Check"])) {
                    $flag = true;
                    setcookie("UserEmailer", $Login_email, time() + 1, "/");
                    setcookie("UserPassord", $Login_password, time() + 1, "/");
                    echo "<script>alert('Login Successful');</script>";

                    if ($flag) {
                        echo "<script>window.location.href = '../view/admindashboard.php';</script>";

                    }


                } else {
                    $flag = true;

                    if ($flag) {
                        echo "<script>alert('Login Successful');</script>";
                        echo "<script>window.location.href = '../view/admindashboard.php';</script>";

                    }

                }
            } elseif (!is_null($row) && $row["UserRole"] == "Member") {
                $_SESSION['Username'] = $row['UserName'];
                $_SESSION['UserEmail'] = $row['UserEmail'];
                $_SESSION['UserPass'] = $row['UserPassword'];
                $_SESSION['UserID'] = $row['UserID'];
                $_SESSION['Role'] = 'Member';

                if (!empty($_POST["Check"])) {
                    $flag = true;
                    setcookie("UserEmailer", $Login_email, time() + 10, "/");
                    setcookie("UserPassord", $Login_password, time() + 10, "/");
                    echo "<script>alert('Login Successful');</script>";

                    if ($flag) {
                        echo "<script>window.location.href = '../view/memberdashboard.php';</script>";

                    }
                } else {
                    $flag = true;

                    if ($flag) {
                        echo "<script>alert('Login Successful');</script>";
                        echo "<script>window.location.href = '../view/memberdashboard.php';</script>";

                    }
                }
            } elseif (!is_null($row) && $row["UserRole"] == "Deliveryman") {
                $_SESSION['Username'] = $row['UserName'];
                $_SESSION['UserEmail'] = $row['UserEmail'];
                $_SESSION['UserPass'] = $row['UserPassword'];
                $_SESSION['UserID'] = $row['UserID'];
                $_SESSION['Role'] = 'Deliveryman';

                if (!empty($_POST["Check"])) {
                    $flag = true;
                    setcookie("UserEmailer", $Login_email, time() + 10, "/");
                    setcookie("UserPassord", $Login_password, time() + 10, "/");
                    echo "<script>alert('Login Successful');</script>";
                    if ($flag) {
                        echo "<script>window.location.href = '../view/deliverymandashboard.php';</script>";

                    }
                } else {
                    $flag = true;

                    if ($flag) {
                        echo "<script>alert('Login Successful');</script>";
                        echo "<script>window.location.href = '../view/deliverymandashboard.php';</script>";

                    }
                }

            } elseif (!is_null($row) && $row["UserRole"] != "Deliveryman" && $row["UserRole"] != "Member") {
                $flager = true;

                echo "<script>alert('You have been blocked');</script>";

                if ($flager) {
                    echo "<script>window.location.href = '../view/userlogin.php';</script>";
                }



            } else {
                echo "Invalid";
            }
        }

    }
}

?>