
<?php

     /****************سارة إسماعيل الفطيسي
      * لتحقق إدا كان الأشخاص الدين قامو بدخول إلي الصفحة مسجلين فيها أو لا
      */
    
    
    
    if(isset($_POST['submit']))
    {
      $user= $_POST['username'];
     $passaword=$_POST['password'];
     $email=$_POST['email'];
     require_once 'databes.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) {
      echo "<p>Error: Could not connect to database.<br/>
      Please try again later.</p>";
        die($conn -> error);
    }
    else{
      echo "  connect to database.<br/>
     .</p>";
    }
 
    $em="SELECT emil FROM user WHERE emil ='$email' ";
    $G=$conn->prepare($em);
    $G->execute();
    $data=$G->fetch();
    $pas= "SELECT password  FROM user WHERE password ='$passaword' ";
    $h = $conn->prepare($pas);
    $h->execute();
    $base=$h->fetch();
   
    if($data && $base)
    {
      $_SESSION['username']= $user;
       
      echo'welcom back  ' ;
      
      echo $_POST['username'];
      session_start();
    
      $Firstuser=$_POST['username'];
      
       $_SESSION['username']=  $Firstuser;
       $_SESSION['password']=  $passaword;
      
      header('REFRESH:5;URL= home page.php');
    }
   
   
     else
   {
    echo'not found ';
    echo $_POST['username'];    
    header('REFRESH:5;URL= login.php');
   }
        
}
    else
    {
      echo'error';
    }
    ?>
 
    

