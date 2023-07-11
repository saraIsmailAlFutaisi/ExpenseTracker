<!DOCTYPE html>
<html>

<head>

</head>

<body style="background-color:rgb(3 244 197 / 35%)"  >
<header style="background-color: rgb(50, 177, 177);">
<button><a href="../ExpenseTracker/home page.php "><strong><h2>back</h2></strong></a></button>
<strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png">
   
    <?php
     /****************سارة إسماعيل الفطيسي
      تعرض بيانات المستخدم
      */
                              session_start();
                              if(empty( $_SESSION['First'] )&& empty(  $_SESSION['email'] ))
                           {  
                            echo'no acount' ;
                       }
                         elseif(!empty( $_SESSION['First'] ))
                         {
                          echo "  " . $_SESSION['First'] ."  ".  $_SESSION['Middle'] . " ". $_SESSION['Last'];
                         }
                         else
                         {
                           
                          echo  $_SESSION['email'];
                         }
                         $id= $_SESSION['userid'];
                  ?>
  
    </header>


<?php

require_once 'databes.php'; 
$conn = new mysqli($hn, $un, $pw, $db);




 $query = "SELECT id,first_name ,middle_name,last_name,phon_nember,emil,password,function_nub	FROM user  WHERE id='$id' ";


$result = $conn->query($query);
if (!$result) {
  echo "<p>Unable to execute the query.</p> ";
  echo $query;
  
}
$data = $result->fetch_array(MYSQLI_ASSOC);
    
if (isset($_POST['update'])) // when click on Update button
{ 
 
    $firstname= $_POST['first'];
    echo"$firstname";
    $middlename = $_POST['middle'];
    $lastname = $_POST['last'];
    $phonnember= $_POST['phon']; 
    $emil = $_POST['emil']; 
    $password = $_POST['password']; 
    $function = $_POST['function'];
    $query="update user set first_name='$firstname',middle_name='$middlename',last_name ='$lastname',phon_nember='$phonnember',emil='$emil',password='$password',function_nub='$function'  WHERE id='$id'";
    $edit = $conn->query($query);
   
    if ($edit) {
       
        header("location:home page.php");
        // redirects to all records page
        exit;
    } else {
        echo "<p>Unable to execute the query.</p> ";
       
        die($conn->error);
    }
  
      
       ?>

        </tr>
        <?php
      }
      ?>



<h3>Update user</h3>

<form    method="POST">
    <p><input type="text" name="first" value="<?php echo $data['first_name'] ?>" placeholder="Enter first name " Required></p>
    <p> <input type="text" name="middle" value="<?php echo $data['middle_name'] ?>" placeholder="Enter middle name" Required></p>
    <p><input type="text" name="last" value="<?php echo $data['last_name'] ?>" placeholder="Enter last name  "Required></p>
    <p><input type="phon nember" name="phon" value="<?php echo $data['phon_nember'] ?>" placeholder="Enter phon nember" Required></p>
    <p> <input type="email" name="emil" value="<?php echo $data['emil'] ?>" placeholder="Enter emil" Required></p>
    <p><input type="password" name="password" value="<?php echo $data['password'] ?>" placeholder="Enter password" Required></p>
    <p><input type="text" name="function" value="<?php echo $data['function_nub'] ?>" placeholder="Enter function" Required></p>

    <input type="submit" name="update" value="Update">
</form>