<!DOCTYPE html>

<html>

<head>

</head>

<body style="background-color:rgb(3 244 197 / 35%)"  >
<header style="background-color: rgb(50, 177, 177);">
<button><a href="../ExpenseTracker/home page.php "><strong><h2>back</h2></strong></a></button>
<strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png"></strong></header>
   
<?php
 /****************سارة إسماعيل الفطيسي
      *تقوم بتسجيل خروج للمستخدم
      */
session_start();
session_unset();
session_destroy();
header('REFRESH:2;URL= home page.php');
echo'you have been signed out of the account' ;      
?>
</body>
</html>
