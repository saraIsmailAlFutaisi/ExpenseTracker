<!DOCTYPE html>
<html>

<head>

</head>

<body style="background-color:rgb(3 244 197 / 35%)"  >
<header style="background-color: rgb(50, 177, 177);">
<button><a href="../ExpenseTracker/update expense.php "><strong><h2>back</h2></strong></a></button>
<strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png">
   
    <?php /****************سارة إسماعيل الفطيسي
      *  تقوم بتعديل مصروف معينة يختاره ا لمستخدم عن طريق إعادة المبلغ خاص بفئة المصروف لوضعه سابق وسحب 
      مبلغ مصروف الجديد منه وتحفط التغير في قاعدة البيانات
      */
                             
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


<?php

require_once 'databes.php'; 
$conn = new mysqli($hn, $un, $pw, $db);
$count= $_GET['count'] ;
$numbercate= $_GET['number_cate'] ;

$query = "SELECT  count,id_user,number_cate ,the_expense,date_expenses,pay_by1,comment FROM expenses WHERE count='$count' and id_user='$id' ";
$query2="SELECT the_amount FROM categories WHERE number_categories='$numbercate' AND id_num='$id';";
$result = $conn->query($query); 
$result2 = $conn->query($query2); 
if (!$result &&$result2) {
    echo "<p>Unable to execute the query</p> ";
    echo $query;
    echo $query2;
    die($conn->error);
}


$data=$result->fetch_array(MYSQLI_ASSOC);
$data2=$result2->fetch_array(MYSQLI_ASSOC);

if (isset($_POST['submit'])) 
{
  
    $the_expense=$_POST['the_expense'];
    $payby= $_POST['pay']; 
    $comment= $_POST['commentt']; 
    $dataexpense= $_POST['DAT']; 
    $exp=$data['the_expense'];
    $theamount=$data2['the_amount'];
    $reslt1=$theamount+$exp;
   
   
    $query3 ="update categories set the_amount =' $reslt1' WHERE  number_categories='$numbercate' ";
    $reslt2=$reslt1- $the_expense;
    echo  $reslt2;
    $query5 ="update categories set the_amount =' $reslt2' WHERE  number_categories='$numbercate' ";
    $query4 ="update expenses set  the_expense =' $the_expense',pay_by1='$payby',comment='$comment',date_expenses=' $dataexpense' WHERE  count='$count' and id_user='$id' ";

    $edit1 = $conn->query($query3);
    $edit3 = $conn->query($query5);
    $edit2 = $conn->query($query4);
    if ($edit1 && $edit2 && $edit3) {
        $conn->close(); 
        header("location:update expense.php");
        exit;
    } else {
        echo "<p>Unable to execute the query.</p> ";
        echo $query3  ;
        echo $query4;
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
            <select  name="pay" id="pay by"  value="">
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
            <input type="submit" value="save" name="submit">
             <input type="reset" value="Delete all">
             
        </p>
</form>