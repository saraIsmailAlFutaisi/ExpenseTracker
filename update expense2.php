<!DOCTYPE html>
<html>

<head>

</head>

<body style="background-color:rgb(3 244 197 / 35%)"  >
<header style="background-color: rgb(50, 177, 177);">
<button><a href="../ExpenseTracker/home page.php "><strong><h2>back</h2></strong></a></button>
<strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png">
   
    <?php /****************سارة إسماعيل الفطيسي
      * تقوم بتعديل فئة معينة يختاره ا لمستخدم
      */
                              session_start();
                              if(empty( $_SESSION['First'] )&& empty( $_SESSION['email']))
                           {  
                            echo'no acount' ;
                       }
                         elseif(!empty( $_SESSION['First'] ))
                         {
                          echo "  " . $_SESSION['First'] ."  ".  $_SESSION['Middle'] . " ". $_SESSION['Last'];
                         }
                         else
                         {
                           
                          echo$_SESSION['email'];
                         }

                         $id= $_SESSION['userid'];
                      
                         ?>
  
    </header>


<?php

require_once 'databes.php'; 
$conn = new mysqli($hn, $un, $pw, $db);

$numbercate= $_GET['number_cate']; 


$query = "SELECT 	id_user,number_cate ,the_expense,date_expenses,pay_by1,comment FROM expenses WHERE number_cate='$numbercate' and id_user='$id' ";

$result = $conn->query($query); 
if (!$result) {
    echo "<p>Unable to execute the query</p> ";
    echo $query;
    die($conn->error);
}



$data=$result->fetch_array(MYSQLI_ASSOC);

if (isset($_POST['Enter'])) 
{
  
    $the_expense=$_POST['the_expense'];
    $payby= $_POST['pay']; 
    $comment= $_POST['commentt']; 
    $dataexpense= $_POST['DAT']; 

    $query ="update expenses set  the_expense =' $the_expense',pay_by1='$payby',comment='$comment',date_expenses=' $dataexpense' WHERE  number_cate='$numbercate' ";

    $edit = $conn->query($query);
   
    if ($edit) {
        $conn->close(); 
        header("location:search category.php");
        exit;
    } else {
        echo "<p>Unable to execute the query.</p> ";
        echo $query;
        die($conn->error);
    }
}
?>

<form   method="POST">

<div> 
               <p> <label >the_expense</label>
                <input type="the_expense" required  name="the_expense"  value="<?php echo $data['the_expense']; ?>"autofocus></p>
           </div>
          <p>  <label for="pay by" >pay by </label>
            <select  name="pay" id="pay by"  value="<?php echo$data['pay_by1']; ?>">
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
            <input type="submit" value="save" name="Enter">
             <input type="reset" value="Delete all">
             
        </p>
</form>