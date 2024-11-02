<?php
require_once('../model/notificationModel.php');

if (isset($_POST['submit'])) {

    if (isset($_POST['notificationFor']) && isset($_POST['notDes'])) {

        $notificationFor = $_POST['notificationFor'];
        $notDes = $_POST['notDes'];

        addNotification($notificationFor, $notDes);
    }
} else {
    echo 'Invalid';
}