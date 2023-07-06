

<?php
/////لطباعةبيانات الاشخاص الي قامو بأنشاء حساب***** */
/*************سارة إسماعيل الفطيسي */


if(isset($_POST['submit'])){
      $firstname=$_POST['firstname'];
      $middlename=$_POST['middlename'];
      $lastname=$_POST['lastname'];
      $email=$_POST['email'];
      $phonenumber=$_POST['phonenumber'];
      $pass=$_POST['passwordd'];
      $password=$_POST['confirm'];
      if($pass== $password)
      {   
  
            echo'<br>';
            echo': user name';
            echo'<br>';
            echo" $firstname". $middlename . $lastname ;
            echo'<br>';
            echo':emil';
            echo'<br>';
            echo"$email";
            echo'<br>';
            echo': passwordd' ;
            echo'<br>';
            echo "$pass";
            echo'<br>';
            echo"$phonenumber";
            echo'<br>';
    
     
           
            header('REFRESH:5;url=home page.php');
         
      }
      
      else{
         echo'<br>';
        echo"the password not incorrect
        try again";  
        header('REFRESH:2;url=signup.php');
      }
   
     
   
       } 
     ?>
       <?php
       session_start();
       $First=$_POST['firstname'];
       $Middle=$_POST['middlename'];
       $Last=$_POST['lastname'];
       $_SESSION['First']= $First ;
       $_SESSION['Middle']= $Middle  ;
       $_SESSION['Last']=$Last;
     ?>  
 
<?php
/****** *
require_once 'databes.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    }
 
    $query = "INSERT INTO user(firstname, middlename, lastname, email,phonenumber,passwordd)  VALUES 
    ( '$firstname', ' $middlename', '$lastname ','$email','$phonenumber', '$pass')" ;
        $result = $conn->query($query);

    if ($result) {
        echo  "<p>user inserted into the database.</p>";
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query ";
    }
  
       
       $conn -> close();
       */
?>