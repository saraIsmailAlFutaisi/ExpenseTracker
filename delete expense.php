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
            <button><a href="../ExpenseTracker/update expense.php"><h2>back</h2></a></button>
        <strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png">  
        <?php
                              session_start();
                              if(empty( $_SESSION['First'] )&& empty(   $_SESSION['email']))
                           {  
                            echo'no acount' ;
                       }
                         elseif(!empty( $_SESSION['First'] ))
                         {
                          echo "  " . $_SESSION['First'] ."  ".  $_SESSION['Middle'] .$_SESSION['Last']  ;
                         }
                         else
                         {
                           
                          echo  $_SESSION['email']  ;
                         }
                         $id= $_SESSION['userid'];
                         ?>
                          
                          
        </header>
        <main>
          
<?php

require_once 'databes.php'; 
$conn = new mysqli($hn, $un, $pw, $db);

$count= $_GET['count']; 

$numbercate= $_GET['number_cate'] ;

$query = "SELECT count,id_user,number_cate ,the_expense,date_expenses,pay_by1,comment FROM expenses WHERE count='$count' and id_user='$id' ";

$result = $conn->query($query); 
if (!$result) {
    echo "<p>Unable to execute the query</p> ";
    echo $query;
    die($conn->error);
}
$query2="SELECT id_num ,number_categories,name_categories,payby,data_categories,comment,the_amount FROM categories WHERE number_categories='$numbercate';";
$result2 = $conn->query($query2); 
if (!$result2) {
    echo "<p>Unable to execute the query</p> ";
    echo $query2;
    die($conn->error);
} 
$data=$result->fetch_array(MYSQLI_ASSOC);
$data2=$result2->fetch_array(MYSQLI_ASSOC);

if (isset($_POST['delete'])) 
{  
    $expense = $_POST['the_expense'];
    $themont=$data2['the_amount'];
   $reslt=$themont+$expense;
    $query3 ="update categories set the_amount ='$reslt' WHERE number_categories='$numbercate'AND id_num ='$id' ";
    $query4="Delete from expenses where count='$count' and id_user='$id' ";
    $delete =  $conn->query($query3);
    $update =  $conn->query($query4);
    if($delete  && $update)
    {  
        $conn->close();// Close connection
        header("location: update expense.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "<p>Unable to execute the query.</p> ";
        echo $query3;
        echo $query4;
        die ($conn -> error);
    }    	
   
}
?>

<form   method="POST">

<div> 
               <p> <label >the_expense</label>
                <input type="the_expense" required  name="the_expense"  value="<?php echo $data['the_expense']; ?>"autofocus></p>
           </div>
          <p>  <label for="pay by" >pay by </label>
            <select  name="pay" id="pay by" >
                <option ><?php echo$data['pay_by1']; ?></option>
                  <option value="check">check</option>
                   <option value="creditcard" >credit card</option>
                   <option value="Cash">Cash</option></p>
                  
            </select>
          </div>
           <div>
               <p> <label>date</label>
                <input  type="date"   name="DAT"  value="<?php echo $data['date_expenses']?>"/></p>
            </div>
        
         <div> 
            <label> comment</label>
            <p><input type="text"  value="<?php echo $data['comment']; ?>" name="commentt" ></p> 
         </div>
         <div>

         </div>
         <p>
            <input type="submit" value="delete" name="delete">
             
        </p>
</form>
        </main>
    </body>
</html>