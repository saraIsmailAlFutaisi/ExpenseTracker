<!DOCTYPE html>
<html>

<head>

</head>

<body style="background-color:rgb(3 244 197 / 35%)"  >
<header style="background-color: rgb(50, 177, 177);">
<button><a href="../ExpenseTracker/search category.php"><strong><h2>back</h2></strong></a></button>
<strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png">
   
    <?php /****************سارة إسماعيل الفطيسي
      * تقوم بحدف المصاريف الخاصة بلفئة وتم تحدف الفئة نفسها
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

   $data = $result->fetch_array(MYSQLI_ASSOC);
if(isset($_POST['delete'])) 
{

     
     $query ="Delete from expenses where number_cate='$numbercate'AND id_user  ='$id'";
     $query2="Delete from categories where number_categories='$numbercate'AND id_num  =' $id'";
    $delete =  $conn->query($query);
    $delete2 =  $conn->query($query2);
    if($delete && $delete2)
    {
        $conn->close();// Close connection
        header("location:search category.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo "<p>Unable to execute the query.</p> ";
        echo $query . $query2;
        die ($conn -> error);
    }    	
}
?>

<form   method="POST">

               <p> <label>date</label>
                <input  type="date"   name="DATE" value="<?php echo $data['data_categories'] ?>"/></p>
                
                <p> <label>name category</label>
                <input  type="name category"  name="name category" value="<?php echo  $data['name_categories'] ?>"/></p>
                

                <p> <label> payby</label>
                <input  type="payby"  name="payby" value="<?php echo  $data['payby']?>"/></p>
                
            </select>     
 
            <p> <label> comment</label>
           <input type="text" required   maxlength="15" minlength="10" placeholder="in ther your comment" name="comment" value="<?php echo $data['comment'] ?>"  ></p> 
  <input type="submit" name="delete" value="Delete">
</form>
</body>
</html>