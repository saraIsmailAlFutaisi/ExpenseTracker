

<html>
  <head>

  </head> 
  <body style="background-color:rgb(3 244 197 / 35%)" >
    <header style="background-color: rgb(87 138 143 / 39%);;" >
    <button><a href="../ExpenseTracker/home page.php "><strong><h2>back</h2></strong></a></button>
    <strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png"></strong>
    </header>
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
       $query2="SELECT id FROM user WHERE emil ='$emai'  and password ='$passd'  " ;

       $result = $conn->query($query);
       $result2 = $conn->query($query2);
    if ($result && $result2) {
       // echo  "<p>user inserted into the database.</p>";
       $data2 = $result2->fetch_array(MYSQLI_ASSOC);
       session_start();
       $First=$_POST['firstname'];
       $Middle=$_POST['middlename'];
       $Last=$_POST['lastname'];
       $_SESSION['First']= $First ;
       $_SESSION['Middle']= $Middle;
       $_SESSION['Last']=$Last;
       $_SESSION['user']= $data2['id'];
       $dd= $_SESSION['user'];
    
    } 
    else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query ";
    }
   
   
      
       }
           
      }
      else{
         echo'<br>';
        echo"the password not incorrect
        try again";  
        header('REFRESH:2;url=signup.php');
      }
   
    
   
        
     ?>
       
  </body>
</html>


 