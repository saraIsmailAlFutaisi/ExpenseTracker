

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
    
      /***
           
            header('REFRESH:5;url=home page.php');
         */
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
  /*************** 
                 ?>
           <?php
           $username ="root";
           $passwor ="";
           $database = new PDO('mysql: host=127.0.0.1; dbname=expensetracker ', $username, $passwor);
           if($database)
           {
            echo"conact whith database";
           }
           else{
            echo"connact is fiel";
           }
         

           ?>
           */
