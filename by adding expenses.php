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
            <button><a href="../ExpenseTracker/search category.php "><h2>back</h2></a></button>
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
                          
                          
        </header>
        <main>
          
<?php

require_once 'databes.php'; 
$conn = new mysqli($hn, $un, $pw, $db);

$numbercate= $_GET['number_categories']; 


$query = "SELECT id_num ,number_categories,name_categories,payby,data_categories,comment,the_amount FROM categories WHERE number_categories='$numbercate';";

$result = $conn->query($query); 
if (!$result) {
    echo "<p>Unable to execute the query</p> ";
    echo $query;
    die($conn->error);
}



$data=$result->fetch_array(MYSQLI_ASSOC);

if (isset($_POST['Ente'])) 
{
   $themont=$_POST['theamount'];
    $the_expense=$_POST['the_expense'];
    $payby= $_POST['pay']; 
    $comment= $_POST['commentt']; 
    $dataexpense= $_POST['DAT']; 

  
    $query2 = "INSERT INTO expenses ( id_user,number_cate,the_expense,date_expenses,pay_by1,comment)  VALUES 
    ('$id' ,'$numbercate' ,'$the_expense', ' $dataexpense','$payby', '$comment')" ;
           $result = $conn->query($query2);
    if ($result) {
    
    
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query2";
    }
    $Result= $themont-$the_expense;
    if( $Result<0)
    {
        $Result=0;  
    }
    $query3 ="update  	categories set the_amount ='$Result' WHERE  number_categories='$numbercate' ";    
    
    $edit = $conn->query($query3);
   
    if ($edit) {
      header('REFRESH:1;URL= home page.php');
        $conn->close(); 
        exit;
    } else {
        echo "<p>Unable to execute the query.</p> ";
        echo $query3;
        die($conn->error);
    }
}

?>

       <form  method="post">
            
          
       <div> 
               <p> <label > name category</label>
                <input type="Chooseacategory" required name="Chooseacategory"  value="<?php echo $data['name_categories'] ?>"></p>
           </div>

            <div> 
               <p> <label >the amount </label>
                <input type="the_expense" required  name="theamount"value="<?php echo $data['the_amount'] ?>"></p>
           </div>
           <div>
               <p> <label>date</label>
                <input  type="date"   name="DATE" value="<?php echo $data['data_categories'] ?>"/></p>
            </div>
            <div> 
            <label> comment</label>
            <p><input type="text" required name="comment" value="<?php echo $data['comment'] ?>" ></p> 
         </div>
         <div> 
            <label>pay by</label>
            <p><input type="payby" required name="payby" value="<?php echo $data['payby'] ?>"></p> 
         </div>
        /*********************************************** */
          <div> 
               <p> <label >the_expense</label>
                <input type="the_expense" required  name="the_expense" autofocus></p>
           </div>
          <p>  <label for="pay by" >pay by </label>
            <select  name="pay" id="pay by" required>
                   <option value="check">check</option>
                   <option value="creditcard" >credit card</option>
                   <option value="Cash">Cash</option></p>
                  
            </select>
          </div>
           <div>
               <p> <label>date</label>
                <input  type="date"   name="DAT"/></p>
            </div>
        
         <div> 
            <label> comment</label>
            <p><input type="text" required   maxlength="15" minlength="10" placeholder="in ther your comment" name="commentt" ></p> 
         </div>
         <div>

         </div>
         <p>
            <input type="submit" value="save" name="Ente">
             <input type="reset" value="Delete all">
             
        </p>
         
      

          </form>
        </main>
    </body>
</html>