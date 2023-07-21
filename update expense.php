<!DOCTYPE html>

<html>

<head>

</head>

<body style="background-color:rgb(3 244 197 / 35%)"  >
<header style="background-color: rgb(50, 177, 177);">
<button><a href="../ExpenseTracker/home page.php "><strong><h2>back</h2></strong></a></button>
<strong> <img alt="enterh.png"src="../ExpenseTracker/icoon/login.png">
   
    <?php  /****************سارة إسماعيل الفطيسي
     تقوم هده الصفحة بعرض جميع فئات المستخدم وتسمح بتعديلها
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
    <style>
    *{
     margin-top: 0%;   
     margin-left: 0%;
     margin-right: 0%;


    }
    table {
    width: 100%;
    border-collapse: collapse;
    caption-side: bottom;
}

th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

tr:nth-child(even) {
    background-color: #f1f1f1;
}
            
caption {
    margin-top: 7px;
}
 
		</style>
  <form action="" method="post" >
  <center>
 <p><strong>Choose Search a category to expense:</strong></p>
   

                <label>date</label>
                <input  type="date"   name="DATE"/>
                <label for="pay by" >pay by </label>
              <select  name="payby" id="pay by" required>
              <option value="choose your pay by">choose your pay by</option>
              <option value="check">check</option>
                   <option value="creditcard" >credit card</option>
                   <option value="Cash">Cash</option>
                  
            </select>
           


  <input type="submit" name="submit" value="Search"></center>
 
  <p>
    <table user="2">
      <tr>
        <td>count</td>
        <td>Id</td>
        <td>number acategory</td>
        <td>the_expense</td>
        <td>date_expenses</td>
        <td>pay_by1</td>
        <td>comment</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>
</p>
      <?php
     if (isset($_POST['submit'])) 
 {$DATE=$_POST['DATE'];
  $payby=$_POST['payby'];
   
  if (!$DATE&& !$payby) {
     echo '<p>You have not entered search details.<br/>
     Please go back and try again.</p>';
     exit;
  }

  // whitelist the searchtype
  switch ($payby) {
    case 'check':
    case 'creditcard':
    case 'Cash':
       
      break;
    default: 
      echo '<p>That is not a valid search type. <br/>
      Please go back and try again.</p>';
      exit; 
  }
      require_once 'databes.php';
      $conn = new mysqli($hn, $un, $pw, $db); // Using database connection file here
      if ($conn->connect_error) {
        echo '<p>Error: Could not connect to database.<br/>
    Please try again later.<br/></p>';
        echo $conn->error;
        exit;
      }
      $query = "SELECT count,id_user,number_cate ,the_expense,date_expenses,pay_by1,comment FROM expenses WHERE 	id_user='$id' AND date_expenses='$DATE' AND pay_by1='$payby' ";
     
      $result = $conn->query($query);
      
      if (!$result) {
        echo "<p>Unable to execute the query.</p> ";
        echo $query;
        die($conn->error);
      }
      // fetch data from database
      $result->num_rows;
      $rows = $result->num_rows;
      for ($j = 0 ; $j < $rows ; ++$j)
      {
        $data = $result->fetch_array(MYSQLI_ASSOC)
        ?>
        <tr>
          <td>
            <?php
           
             echo $data['count']; ?>
          </td>
          <td>
            <?php
           
             echo $data['id_user']; ?>
          </td>
          <td>
            <?php echo $data['number_cate']; ?>
          </td>
          <td>
            <?php echo $data['the_expense']; ?>
          </td>
          <td>
            <?php echo $data['date_expenses']; ?>
          </td>
          <td>
            <?php echo $data['pay_by1']; ?>
          </td>
          <td>
            <?php echo $data['comment']; ?>
         </td>
  
     
 
     
      
      
          <td><button><a href="update expense2.php?count=<?php echo $data['count'];?>& number_cate=<?php echo $data['number_cate'];?>">Edit</a></button></td> 
          <td><button><a href="delete expense.php?count=<?php echo $data['count'];?>& number_cate=<?php echo $data['number_cate'];?>">Delete</a></button></td> 
          </td>
         
        </tr>
         
        <?php
      }
      }
      ?>
    </table>


  </form>
</body>

</html>