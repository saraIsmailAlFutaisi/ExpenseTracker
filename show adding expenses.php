<?php

if(isset($_POST['Enter']))
{
$theexpense=$_POST['the_expense'];
echo"$theexpense";
echo'<br>';
$commente=$_POST['comment'];
echo"$commente";
echo'<br>';
$DATEa=$_POST['DATE'];
echo"$DATEa";
echo'<br>';

  $payby= $_POST['payby'];
  echo"$payby";
  echo'<br>';


}

 
require_once 'databes.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    }
   
    
  session_start();
 $id= $_SESSION['userid'];
 $catenum=$_SESSION['number_categories'];

    $query = "INSERT INTO expenses(number_cate ,the_expense,exp_after_deduction,date_expenses,pay_by1,comment)  VALUES 
    ('$id','$catenum', '$theexpense',012,'$DATEa','$payby','$commente')" ;
     echo    "<br/>$query ";
           $result = $conn->query($query);

    if ($result) {
     //   echo  "<p> inserted into the database.</p>";
     header('REFRESH:4;URL= home page.php');
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query ";
    }
  
       
       $conn -> close();
    
?>

