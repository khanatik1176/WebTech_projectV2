<?php

session_start();

$far = $_POST['Former'];
$der = $_POST['Toto'];
$typer = $_POST['Typer'];

$dhakasmall = $far == 'DHAKA' && $der == 'DHAKA' && $typer == 'Small';
$dhakamedium = $far == 'DHAKA' && $der == 'DHAKA' && $typer == 'Medium';
$dhakaLarge = $far == 'DHAKA' && $der == 'DHAKA' && $typer == 'Large';


if (isset($_POST['Fare'])) {
    if ($dhakasmall == 'True') {
        echo '80tk';
    } else if ($dhakamedium == 'True') {
        echo '120tk';
    } else if ($dhakaLarge == 'True') {
        echo '180tk';
    }


}


?>