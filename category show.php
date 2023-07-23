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
/*******************
 * سارة إسماعيل الفطيسي
 * تقوم هده الصفحة بإدخال بينات الفئة في قاعدة البيانات
 * وتقوم بعرضها من قاعدة البيانات
 */
if(isset($_POST['save']))
{
$theam=$_POST['theamount'];

$commente=$_POST['comment'];

$DATEa=$_POST['DATE'];


 $namecate=$_POST['Chooseacategory'];

  $payby= $_POST['payby'];



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
      
    if ( $result) {
     //   echo  "<p> inserted into the database.</p>";
     header('REFRESH:4;URL= home page.php');
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query ";
    }
    $query2= "SELECT 	id_num ,number_categories ,name_categories,payby,data_categories,comment,the_amount FROM 	categories WHERE 	id_num='$id' ";
    $result2 = $conn->query($query2);
   $data2 = $result2->fetch_array(MYSQLI_ASSOC) ;
      
       echo $data2['name_categories']; 
       echo '<br>' ; 
       echo $data2['payby']; ; 
       echo '<br>' ;
       echo $data2['data_categories']; ; 
       echo '<br>' ;
       echo $data2['comment']; ; 
       echo '<br>' ;
       echo $data2['the_amount']; 
       echo '<br>' ;
   
      if ($data2) {
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