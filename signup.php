

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
  </header>

    <form action="cheak.php" method="post" > 
     
       <div> 
          <label> username</label>
          <p><input type="text" required   maxlength="15" minlength="10" placeholder="in ther your name" name="username" ></p> 
       </div>

       
        <div> 
             <label> E-mail address </label>
             <p><input type="email" required placeholder="in ther your emil" name="email" autofocus></p>
        </div> 
      
      
       <div>
      
          <label>password</label>
          <p><input type="password" required  maxlength="14" minlength="10" placeholder="in ther your passwordd" name="password" pattern="[A-Za-z\d\.\$\%\^\&\*\@\)]{10,14}" ></p>
       </div> 
       <div> 
         <label>confirm password </label>
          <p><input type="password" required  maxlength="14" minlength="10"placeholder="confirm  your password" name="confirm" pattern="[A-Za-z\d\.\$\%\^\&\*\@\)]{10,14}" ></p>
     </div> 
     
    
    
       
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

