<?php
session_start();
session_unset();
session_destroy();
header('REFRESH:5;URL= home page.php');
echo'you have been signed out of the account' ;      
?>