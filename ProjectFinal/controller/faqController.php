<?php

require_once('../model/FunctionalitesModel.php');
// echo 'i am in';
// echo $_POST['question'];
$_SESSION['ans'] = '';
if(isset($_POST['question'])){
    $qust = $_POST['question'];
    faqAns($qust);
    header("location: ../view/faq.php");
    exit;
}