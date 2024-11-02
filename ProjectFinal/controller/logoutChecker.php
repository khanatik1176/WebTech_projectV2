<?php 

session_start();

$_SESSION['Username'] = "";
session_destroy();
if(isset($_COOKIE["UserEmailer"]) && isset( $_COOKIE["UserPassord"]))
{
    setcookie('UserEmailer',"", time()-3);
    setcookie('UserPassord', "", time()-3);
    header("location: ../view/userLogin.php" );
}
elseif(!isset($_COOKIE["UserEmailer"]) && !isset( $_COOKIE["UserPassord"]))
{
    header("location: ../view/userLogin.php" );
}


?>