<!DOCTYPE html>
<html>
    <head>
   <link rel="icon" href="../ExpenseTracker/icoon/money (1).png"/>
            <meta name=" add category "  content=" بإضافة  النفقات"/>
            <title>add category</title>
            <meta charset="UTF-8" />
    </head>
    <body style="background-color:rgb(3 244 197 / 35%)"  >
        <header style="background-color: rgb(87 138 143 / 39%);" >
            <button><a href="../ExpenseTracker/update expense.php"><h2>back</h2></a></button>
        <strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png">  </strong></header>
<?php
if(isset($_POST['save']))
{
$theam=$_POST['theamount'];
echo"$theam";
echo'<br>';
$commente=$_POST['comment'];
echo"$commente";
echo'<br>';
$DATEa=$_POST['DATE'];
echo"$DATEa";
echo'<br>';

 $namecate=$_POST['Chooseacategory'];
echo "$namecate";
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
  if(!empty($_SESSION['userid']))
 {$id= $_SESSION['userid'];
}
else{
  $id= $_SESSION['user'];
}
    $query = "INSERT INTO categories(	id_num,name_categories, payby,data_categories,comment,the_amount)  VALUES 
    ('$id','$namecate', '$payby','$DATEa','$commente', '$theam')" ;
           $result = $conn->query($query);
           $data = $result->fetch_array(MYSQLI_ASSOC);
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
    </body>
</html>