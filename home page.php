
<!DOCTYPE html>
<!--سارة أسماعيل الفطيسي
هده الصفحة هي الصفحة الرئيسية تحتوي علي جميع الروابط
التي توصلك الي جميع الصفحات-->
<html  >
  


     <link rel="icon" href="../ExpenseTracker/icoon/save-money.png"/>
     <meta name=" Expense Tracker(ET)  "  content=""/>
     <head class="down_up" >
    
      <title>Expense Tracker(ET) </title>
      <meta.charset="UTF-8"/>  
      <link rel="stylesheet" href="../php/css/style.css">
      <link rel="stylesheet" href="css\style.css">
      
     
    </head>
    <body class="cloor-body">
      

       <header>
             <div>
                 <strong><p>sara alfutise</p> 
                  <p></p> </strong>
              </div>
              
                    
        </header>
        
            <nav  > 
                         
                <center>
                        <ul>
                            <li><a href="../ExpenseTracker/about us.php"><strong><img alt="exam"src="../ExpenseTracker/icoon/exam.png">about us</strong></a></li> </ul> 
                            <ul>
                                <li><a href="../ExpenseTracker/login.php"><strong><img alt="login"src="../ExpenseTracker/icoon/login.png">
                                <?php
                                session_start();
                                if(isset($_SESSION['username']))
                                {
                                print_r($_SESSION);
                                }
                                
                                ?>
                                login
                            
                            
                            
                            
                            </strong></a> </li> 
                            </ul>
                            <ul>
                              <li> <a href="../ExpenseTracker/signup.php"><strong><img alt="user"src="../ExpenseTracker/icoon/add-user.png">signup</strong></a> </li>   
                            </ul>
                           <ul>
                             <li><a href="../ExpenseTracker/add category.php"><strong><img alt="money.png"src="../ExpenseTracker/icoon/money.png"> category</strong></a></li>
                           </ul>
                           <ul>
                            <li><a href=""><strong> <img alt="enter.png"src="../ExpenseTracker/icoon/enter.png">logout</strong> </a></center></li> 
                           </ul>
                           


                       
            </nav>
       
        <main>
          <img alt="background" src="../ExpenseTracker/pictuer/Money stress-bro (1).svg " />
           
        </main>
        
    </body>
    <footer class="down_up">
       <em> <a href="mailto:saf660006@.com">emil mailto:saf660006@.com</a>
       <p><img alt="phone number" src="../ExpenseTracker/icoon/telephone-call.png"/>phone number 0905580420</p>
       <p>sara alfutise The copyright sign: &copy;2023</p> </em>
        <img alt="instagram"src="../ExpenseTracker/icoon/instagram.png"/>
        <img alt="facebook"src="../ExpenseTracker/icoon/facebook.png"/>
        <img alt="whatsapp"src="../ExpenseTracker/icoon/whatsapp.png"/>
        <img alt="telegram"src="../ExpenseTracker/icoon/telegram.png"/>
    </footer>
</html>