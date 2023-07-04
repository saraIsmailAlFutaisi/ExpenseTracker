
<!DOCTYPE html>
<!--
  سارة إسماعيل الفطيسي
  تقوم الصفحة بتسجيل دخول للأشخاص المسجلين في الصفحة
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
    </header>
    <main >
    
   <p> <form action="cheaklogin.php" method="post"  > 
    
     
     <div> 
        <label> user name</label>
        <p><input type="text" required   maxlength="15" minlength="10" placeholder="in ther your name" name="username" autofocus></p> 
     </div>

     <div>
    
        <label>password</label>
        <p><input type="password" required  maxlength="14" minlength="10" placeholder="in ther your password" name="password" autofocus></p>
     </div> 
     
    <div> <p>
            <h2> <input type="submit" value="login" name="submit">
             <input type="reset" value="Delete all"></h2>
           
    </div>
 
 
   </form>
         
                    
    </main> 
  </body>
  <footer >

  </footer> 
</html>