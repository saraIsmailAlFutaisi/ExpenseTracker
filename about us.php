<!DOCTYPE html>
<html>
  <!--سارة إسماعيل الفطيسي
  تتكلم هده الصفحةعلي فائدت هدا الموقع-->
    <head  style="background-color: rgb(50, 177, 177);">
        <link rel="icon" href="../ExpenseTracker/icoon/presentation.png"/>
        <meta name="تتكلم عن محتوبات الموقع "/>
        <title> Expense Tracker(ET) </title>
        <meta.charset="UTF-8"/> 
    </head>
    <body >
    <header style="background-color: rgb(50, 177, 177);">
    <center><h2><p> Expense Tracker(ET)</p></h2>
  
   <strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png">
    <?php
                              session_start();
                              if(empty( $_SESSION['First'] )&& empty( $_SESSION['email'] ))
                           {  
                            echo'no acount' ;
                       }
                         elseif(!empty( $_SESSION['First'] ))
                         {
                          echo "  " . $_SESSION['First'] ."  ".  $_SESSION['Middle'] . " ". $_SESSION['Last'];
                         }
                         else
                         {
                           
                          echo $_SESSION['email'];
                         }
                         ?>
  </center> 
     <nav>
    <button><a href="../ExpenseTracker/home page.php  "><strong><h1>back</h1></strong></a></button>
    
   
                        
    </nav>
    </header>
    
    <main >
    <style>
    *{
     margin-top: 0%;   
     margin-left: 0%;
     margin-right: 0%;
     
    }
   
    </style>
 <strong> 
   <h1>
  
   </h1>
   <h3>
  <p>
     This site is designed to track personal pages highlighting</p>

   <p> Monitoring and controlling the financial budget</p>  

   <p> And achieves their financial goals that go in their plans</p>
  
   <p> Helps you plan your personal expenses and unavailability</p>
    
    <p> Get out of the budget that you've made</p>
     
    <p>and control user spending habits,</p>
    <hr>
    </h3>
     <img alt=""src="../ExpenseTracker/pictuer\Money stress-rafiki.svg"/>
    </main>



    </body>
    <footer  style="background-color: rgb(50, 177, 177);">  
      <em> <a href="mailto:saf660006@.com">emil mailto:saf660006@.com</a>
        <p> nuber phan  0910000</p>
        <p>sara alfutise The copyright sign: &copy;2023</p> </em>
       
         </footer>
</html>