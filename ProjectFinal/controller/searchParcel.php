<?php
require_once('../Model/parcelmgtModel.php');

if (isset($_POST['info'])) {
    $searchQuery = $_POST['info'];
    $search =  searchParcel($searchQuery); 

    foreach ($search as $result) {
        echo "<p>{$result['rname']} ";
    }
}
?>