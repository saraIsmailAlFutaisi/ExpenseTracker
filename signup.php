

<!DOCTYPE html>
<!--
  سارة إسماعيل الفطيسي
   تقوم هده الصفحة بأنشاء حساب للمستخدمين الجد
  !-->
<html>

<head >
   <link rel="icon" href="../ExpenseTracker/icoon/user.png"/>
    
    <meta charset="UTF-8" />
   <meta name" حساب إنشاء " content="تقوم بإنشاء حساب لتسجيل في الموقع"/ >
   
   
    <title>sign up</title>
    
     
</head>
<body style="background-color:rgb(3 244 197 / 35%)"  >
  <header style="background-color: rgb(87 138 143 / 39%);" >
  <button><a href="../ExpenseTracker/home page.php "><strong><h2>back</h2></strong></a></button>
  <a href=""><strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png">
  <?php
       session_start();
       if(empty( $_SESSION['First'] ))
    {  
      echo'no acount' ;
}
  else{
   echo "  " . $_SESSION['First'] ."  ".  $_SESSION['Middle'] . " ". $_SESSION['Last'];
  }
  ?>
  </header>

    <form action="cheak.php" method="post" > 
     
       <p>
          <label> firs tname</label>
          <input type="text" required   maxlength="10" minlength="5" placeholder="in ther your first name" name="firstname" > 
    
    
       
      
          <label> middle name</label>
         <input type="text" required   maxlength="10" minlength="5" placeholder="in ther your middle name" name="middlename" > 
      
      
          <label> last name</label>
          <input type="text" required   maxlength="10" minlength="5" placeholder="in ther your last name" name="lastname" >
          
</p>
        <div> 
             <label> E-mail address </label>
             <p><input type="email" required placeholder="in ther your emil" name="email" autofocus></p>
        </div> 
        <div>
      
      <label>phone number</label>
      <p><input type="phone number" placeholder="in ther your phone number" name="phonenumber"  ></p>
   </div> 
      
       <div>
      
          <label>password</label>
          <p><input type="password" required  maxlength="14" minlength="10" placeholder="in ther your passwordd" name="passwordd" pattern="[A-Za-z\d\.\$\%\^\&\*\@\)]{10,14}" ></p>
       </div> 
       <div> 
         <label>confirm password </label>
          <p><input type="password" required  maxlength="14" minlength="10"placeholder="confirm  your password" name="confirm" pattern="[A-Za-z\d\.\$\%\^\&\*\@\)]{10,14}" ></p>
     </div> 
     
    
    
  
      <p>  <label for="Choose " >functin</label>
                  <select  name="Choose afunctin " id="Choose " required>
                         <option value="1">student</option>
                         <option value="2">teacher</option>
                         <option value="3">employee</option>
                         <option value="4">free work</option>
                        
                        </p>
                        
                  </select>



                  <p><label><strong> to the terms of an agreement</strong>
               <?php
               echo '<br>';
               echo  __FILE__;
                 ?>
            </label>
          
            
              <input  id="yes "type="checkbox" name="Agree to the terms of an agreement" value=" Agree to the terms of an agreement  " >
              <label for="yes"> </label>
            </p> 
      </div>
        <div>
       
        <p>
        <input type="submit" value="sigup" name="submit">
             <input type="reset" value="Delete all">
             
             
        </p>
      </div>

</form>

</body>
<footer>

        
</footer>
</html>

