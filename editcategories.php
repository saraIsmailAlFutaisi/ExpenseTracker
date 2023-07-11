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

$numbercate= $_GET['number_categories']; 


$query = "SELECT id_num ,number_categories,name_categories,payby,data_categories,comment,the_amount FROM categories WHERE number_categories='$numbercate';";

$result = $conn->query($query); 
if (!$result) {
    echo "<p>Unable to execute the query</p> ";
    echo $query;
    die($conn->error);
}



$data=$result->fetch_array(MYSQLI_ASSOC);

if (isset($_POST['update'])) 
{
   
    $namecategorie = $_POST['Chooseacategory'];
    $theamount= $_POST['theamount'];
    $payby= $_POST['payby']; 
    $comment= $_POST['comment']; 
    $datacategories = $_POST['DATE']; 
    $query ="update categories set  the_amount =' $theamount',payby='$payby',comment='$comment',data_categories=' $datacategories',name_categories='$namecategorie' WHERE  number_categories='$numbercate' ";

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

               <p> <label>date</label>
                <input  type="date"   name="DATE" value="<?php echo $data['data_categories'] ?>"/></p>
                <p>  <label for="Choose " >Choose a category</label>
                  <select  name="Chooseacategory" id="Choose "  value="<?php echo $data['name_categories'] ?>"  required>
                         <option value="food" >food</option>
                         <option value="gift" >gift</option>
                         <option value="study" >study</option>
                         <option value="holidays">holidays</option>
                         <option value="fule" >fule</option>
                         <option value="clothes" >clothes</option>
                         <option value="home" >home</option>
                        </p>   
                  </select>

               <p> <label >the amount </label>
                <input type="the amount" required placeholder=" the amount" name="theamount"  value="<?php echo $data['the_amount'] ?>" autofocus></p>
          <p>  <label for="pay by" >pay by </label>
            <select  name="payby" id="pay by"  value="<?php echo $data['payby'] ?>"  required>
                   <option value="check">check</option>
                   <option value="creditcard" >credit card</option>
                   <option value="Cash">Cash</option></p>
                  
            </select>     
 
            <p> <label> comment</label>
           <input type="text" required   maxlength="15" minlength="10" placeholder="in ther your comment" name="comment" value="<?php echo $data['comment'] ?>"  ></p> 
    <input type="submit" name="update" value="Update">
</form>