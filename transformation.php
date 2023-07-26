<!DOCTYPE html>
<html>
<head>
   <link rel="icon" href="../ExpenseTracker/icoon/money (1).png"/>
            <meta name=" add category "  content=" بإضافة  النفقات"/>
            <title>add category</title>
            <meta charset="UTF-8" />
    </head>
    <body style="background-color:rgb(3 244 197 / 35%)"  >
        <header style="background-color: rgb(87 138 143 / 39%);" >
            <button><a href="../ExpenseTracker/home page.php "><h2>back</h2></a></button>
        <strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png">  
        <?php
                              session_start();
                              try {
                              if(empty( $_SESSION['First'] )&& empty( $_SESSION['email']) &&empty($_SESSION['userid'] ))
                           {  
                           
                            throw new Exception("no acount");
                       }
                         elseif(!empty( $_SESSION['First'] )&&!empty($_SESSION['user']))
                         {
                          echo "  " . $_SESSION['First'] ."  ".  $_SESSION['Middle'] . " ". $_SESSION['Last'];
                          $id= $_SESSION['user'];
                         }
                         else
                         {
                           
                          echo $_SESSION['email'];
                          $id= $_SESSION['userid'];
                         }
      
                        
                      }
                      catch (Exception $e) {
                          echo $e->getMessage();
                      }
                         ?>
        </strong></header>   
<form   method="POST">

<p> <label>date</label>
 <input  type="date"   name="DATE" ></p>
 
  
<p>  <label >convert form  category </label>
 <div> 
                  <select  name="convertformcategory"  required>
                         <option value="food" >food</option>
                         <option value="gift" >gift</option>
                         <option value="study" >study</option>
                         <option value="holidays">holidays</option>
                         <option value="fule" >fule</option>
                         <option value="clothes" >clothes</option>
                         <option value="home" >home</option>
                        </p>
                        
                  </select>
                </div>
                <p>  <label >to the category</label>
 <div> 
                  <select  name="tothecategory"  required>
                         <option value="food" >food</option>
                         <option value="gift" >gift</option>
                         <option value="study" >study</option>
                         <option value="holidays">holidays</option>
                         <option value="fule" >fule</option>
                         <option value="clothes" >clothes</option>
                         <option value="home" >home</option>
                        </p>
                        
                  </select>
                </div>
  
   
     
<div> 
               <p> <label >the amount </label>
                <input type="the amount" required placeholder=" the amount" name="theamount" autofocus></p>
           </div>
<p> <label> comment</label>
<input type="text" maxlength="15" minlength="10" placeholder="in ther your comment" name="comment" ></p> 

  
   
    
<p>
<input type="submit" name="convert" value="save"></p>
<?php

if (isset($_POST['convert'])) 
{

    ?>
    <script>
                 
            alert('')
             
    </script>
    <?php
    header('REFRESH:1;URL= home page.php');
  
}
?>
</form>
</body>
</html>