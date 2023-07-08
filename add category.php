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
                              if(empty( $_SESSION['First'] )&& empty( $_SESSION['username'] ))
                           {  
                            echo'no acount' ;
                       }
                         elseif(!empty( $_SESSION['First'] ))
                         {
                          echo "  " . $_SESSION['First'] ."  ".  $_SESSION['Middle'] . " ". $_SESSION['Last'];
                         }
                         else
                         {
                           
                          echo $_SESSION['username'];
                         }
                         ?>
                          
                          
        </header>
        <main>
       <form action="category show.php"  method="post">
             <div>
               <p> <label>date</label>
                <input  type="date"   name="DATE"/></p>
            </div>
            <div> 
                <p>  <label for="Choose " >Choose a category</label>
                  <select  name="Chooseacategory" id="Choose " required>
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
            
          <div> 
          <p>  <label for="pay by" >pay by </label>
            <select  name="payby" id="pay by" required>
                   <option value="check">check</option>
                   <option value="creditcard" >credit card</option>
                   <option value="Cash">Cash</option></p>
                  
            </select>
          </div>
          
         <div>
             <p><label> inter picture</label>
             <input type="file" name="file"/></p>
         </div>
         <div> 
            <label> comment</label>
            <p><input type="text" required   maxlength="15" minlength="10" placeholder="in ther your comment" name="comment" ></p> 
         </div>
         <p>
            <input type="submit" value="save" name="save">
             <input type="reset" value="Delete all">
             
        </p>
         
       
         
        





          </form>
        </main>
    </body>
</html>