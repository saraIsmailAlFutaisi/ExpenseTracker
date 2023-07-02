

<?php
/////لطباعةبيانات الاشخاص الي قامو بأنشاء حساب***** */
/*************سارة إسماعيل الفطيسي */

if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $email=$_POST['email'];
      $pass=$_POST['password'];
      $password=$_POST['confirm'];
      if($pass== $password)
      {   
  
            echo'<br>';
            echo': user name';
            echo'<br>';
            echo"$username";
            echo'<br>';
            echo':emil';
            echo'<br>';
            echo"$email";
            echo'<br>';
            echo': password' ;
            echo'<br>';
            echo "$pass";
            echo'<br>';
           
      
           
            header('REFRESH:5;url=home page.html');
        
      }
      
      else{
         echo'<br>';
        echo"the password not incorrect
        try again";  
        header('REFRESH:2;url=signup.php');
      }
   
     
   
       } 
     
     
  
                 ?>