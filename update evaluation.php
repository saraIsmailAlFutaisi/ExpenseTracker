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
<?php

require_once 'databes.php'; 
$conn = new mysqli($hn, $un, $pw, $db);

$query= "SELECT id_cont ,comment,data_evaluation,evaluation FROM evaluation WHERE id_cont='$id'";

$result = $conn->query($query); 
$data=$result->fetch_array(MYSQLI_ASSOC);
if (!$result) {
    echo "<p>Unable to execute the query</p> ";
    echo $query;
    die($conn->error);
}
if (isset($_POST['save'])) 
{   
    $spa="";
    $comment=$_POST['comment'];
    $data_evaluation=$_POST['DATE'];
    $evaluation=$_POST['evaluation'];
    $query3 ="update  evaluation set comment ='$comment',data_evaluation='$data_evaluation',evaluation='$evaluation' WHERE id_cont='$id'";    
    
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
<form   method="POST">

<p> <label> comment</label>
<input type="text" maxlength="40" minlength="10" placeholder="in ther your comment" name="comment" value="<?php echo $data['comment']?>" ></p> 
<p> <label>date</label>
 <input  type="date"   name="DATE"  value="<?php echo $data['data_evaluation']?>"></p>
 
 <p>  <label >evaluation </label>

   <select  name="evaluation" value="<?php echo $data['evaluation']?>" >
     
   <option ><?php echo $data['evaluation']?> </option>
          <option value="1" >very bad</option>
          <option value="2" >bad</option>
          <option value="3" >good</option>
          <option value="4">vety good</option>
          <option value="5" >excellent</option>
        
         </p>   
   </select>


  
   
</select>     
<p>
<input type="submit" name="save" value="save">