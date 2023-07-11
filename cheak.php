

<?php
/////لطباعةبيانات الاشخاص الي قامو بأنشاء حساب*وأدخالهم الي قاعدة البيانات**** */
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
            echo" $firstname. $middlename . $lastname" ;
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
            
           session_start();
            $First=$_POST['firstname'];
            $Middle=$_POST['middlename'];
            $Last=$_POST['lastname'];
            $_SESSION['First']= $First ;
            $_SESSION['Middle']= $Middle;
            $_SESSION['Last']=$Last;
            

            
         
        


  $firstn=$_POST['firstname'];
  $middlen=$_POST['middlename'];
  $lastn=$_POST['lastname'];
  $emai=$_POST['email'];
  $phone=$_POST['phonenumber'];
  $passd=$_POST['passwordd'];
  $functi=$_POST['functin'];

require_once 'databes.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    }
   
 
    $query = "INSERT INTO user(first_name,middle_name,last_name,phon_nember,emil,password,function_nub)  VALUES 
    ('$firstn','$middlen','$lastn','$phone','$emai','$passd','$functi')" ;
        $result = $conn->query($query);

    if ($result) {
       // echo  "<p>user inserted into the database.</p>";
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query ";
    }
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
       
  

 