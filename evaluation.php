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

<p> <label> comment</label>
<input type="text" maxlength="40" minlength="10" placeholder="in ther your comment" name="comment" ></p> 
<p> <label>date</label>
 <input  type="date"   name="DATE" ></p>
 
 <p>  <label >evaluation </label>

   <select  name="evaluation"  >
     
   <option value="" >choose evaluation </option>
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

<td><button><a href="update evaluation.php">Edit</a></button></td> </p>
<?php

require_once 'databes.php'; 
$conn = new mysqli($hn, $un, $pw, $db);



if (isset($_POST['save'])) 
{   
    $spa="";
    $comment=$_POST['comment'];
    $data_evaluation=$_POST['DATE'];
    $evaluation=$_POST['evaluation'];
    if($comment==$spa||$data_evaluation==$spa||$evaluation==$spa)
    {
        ?>
        <script>
                     
                alert('please try again and make sure to fill in all fields')
                 
        </script>
        <?php
       
    }
    else{
   
    $query = "SELECT id_cont ,comment,data_evaluation,evaluation FROM evaluation WHERE id_cont='$id'";
    if($query!=$spa){
        ?>
        <script>
                     
                alert('you have been review ,you can just update your old review  ')
                 
        </script>
        <?php
    }
    else{
        ?>
        <script>
                     
                alert('Thank you for your review')
                 
        </script>
        <?php
    $query = "INSERT INTO evaluation ( id_cont ,comment,data_evaluation,evaluation)  VALUES 
    ('$id' ,'$comment' ,'$data_evaluation', ' $evaluation')" ;
           $result = $conn->query($query);
    if ($result) {
    
    
    } else {
        echo   $conn -> error ;
        echo   "<br/>.The item was not added.";
        echo    "<br/>$query";
    }
    header('REFRESH:1;URL= home page.php');
    }
}
}
?>

</form>
</body>
</html>