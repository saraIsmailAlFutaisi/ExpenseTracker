
<!DOCTYPE html>
<!--
  سارة إسماعيل الفطيسي
  تقوم الصفحة بسماح دخول للأشخاص المسجلين في قاعدة البيانات
   !-->
<html>
  <head>
  <link rel="icon" href="../ExpenseTracker/icoon/profile.png"/>
    <meta charset="UTF-8" />
   <meta name="تسجيل دخول " content="دخول لأشخاص المسجلين في الصفحة"/ >
   
    <title>login</title>
  </head> 
  <body style="background-color:rgb(3 244 197 / 35%)" >
    <header style="background-color: rgb(87 138 143 / 39%);;" >
    <button><a href="../ExpenseTracker/home page.php "><strong><h2>back</h2></strong></a></button>
    <strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png">
    <?php
    session_start();
                             
    if(empty(  $_SESSION['email']))
                           {  
                            echo'no acount' ;
                       }
                     
                         ?>
    </header>
    <main >
    
   <p> <form action="cheaklogin.php" method="post"  > 
    
   <label> E-mail address </label>
             <p><input type="email" required placeholder="in ther your emil" name="email" autofocus></p>
        </div> 
    <div> <p>
     <div>
    
        <label>password</label>
        <p><input type="password" required  maxlength="14" minlength="10" placeholder="in ther your password" name="password" autofocus></p>
     </div> 
     
            <h2> <input type="submit" value="login" name="submit">
             <input type="reset" value="Delete all"></h2>
           
    </div>
 
   
   </form>
         
             
    </main> 
  </body>
  <footer >

  </footer> 
</html>