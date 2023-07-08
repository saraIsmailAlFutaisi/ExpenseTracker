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
$interpicture=$_POST['file'];
echo"$interpicture";
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
    else{
      echo " connect to database.<br/>
    .</p>";
    }
 
    $query = "INSERT INTO categories(id_num,name_categories, payby,data_categories,comment,the_amount)  VALUES 
    ('$namecate', '$payby','$DATEa','$commente', '$theam')" ;
           $result = $conn->query($query);

    if ($result) {
        echo  "<p> inserted into the database.</p>";
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query ";
    }
  
       
       $conn -> close();
     
?>