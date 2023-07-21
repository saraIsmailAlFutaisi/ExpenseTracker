
<html>
  <head>

  </head> 
  <body style="background-color:rgb(3 244 197 / 35%)" >
    <header style="background-color: rgb(87 138 143 / 39%);;" >
    <button><a href="../ExpenseTracker/home page.php "><strong><h2>back</h2></strong></a></button>
    <strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png"></strong></header>
<?php

     /****************سارة إسماعيل الفطيسي
       لتحقق إدا كان الأشخاص الدين قامو بدخول إلي الصفحة مسجلين في قاعدة البيانات اولا
      */
    
    
    
    if(isset($_POST['submit']))
    {
      
     $passaword=$_POST['password'];
     $email=$_POST['email'];
     require_once 'databes.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    }
  
    $query="SELECT emil ,id,phon_nember FROM user WHERE emil ='$email'  and password ='$passaword'  " ;
    $result = $conn->query($query);
    if (!$result) {
      echo "<p>Unable to execute the query.</p> ";
      echo $query;
      
    }
    
   $data = $result->fetch_array(MYSQLI_ASSOC);

    
    if($data)
    {
      

      echo'welcom back  ' ;
      
      echo $_POST['email'];
      session_start();
    
      $email=$_POST['email'];
      
       $_SESSION['email']=  $email;
      $_SESSION['userid']= $data['id'];
      
      
    header('REFRESH:4;URL= home page.php');
    }
   
   
     else
   {
    echo $_POST['email'] ." ".'not found  plase try agin';
       
   header('REFRESH:5;URL= login.php');
   }
        
}
    else
    {
      echo'error';
    }
    ?>
 
  </body>

