
<?php

     /****************سارة إسماعيل الفطيسي
      * لتحقق إدا كان الأشخاص الدين قامو بدخول إلي الصفحة مسجلين فيها أو لا
      */
    $admins=array("admin_2023","cs314_2023","system_admin");
    $pass=array("Admin_2023","Cs314_2023","System_admin1");
    
    
    if($_issert(["submit"]))
    {
      $user= $_POST['username'];
     $passaword=$_POST['password'];
     if(in_array($user, $admins ) && (in_array( $passaword,$pass) ))
     {
         $_SESSION['username']= $user;
            
            echo'welcom back  ' ;
            
            echo $_POST['username'];
            
    
            
           
          
          
        header('REFRESH:5;URL= home page.php');
        
    }
   else{
    echo'not found ';
    echo $_POST['username'];    
   }
  
   
}
    else
    {
      echo'error';
    }
    ?>
    

