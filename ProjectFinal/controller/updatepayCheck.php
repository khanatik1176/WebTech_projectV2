<?php
require_once('../model/UserModel.php');

if (isset($_POST['submit'])) {

    if (isset($_POST['paymentMethod'])) {

        $paymentMethod = $_POST['paymentMethod'];
        updatePaymentMethod($paymentMethod);
        header('location: ../view/viewprofile.php');
    }
} else {
    echo 'Invalid';
}