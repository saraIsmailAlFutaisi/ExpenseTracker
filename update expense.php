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
                              if(empty( $_SESSION['First'] )&& empty( $_SESSION['email'] ))
                           {  
                            echo'no acount' ;
                       }
                         elseif(!empty( $_SESSION['First'] ))
                         {
                          echo "  " . $_SESSION['First'] ."  ".  $_SESSION['Middle'] . " ". $_SESSION['Last'];
                         }
                         else
                         {
                           
                          echo $_SESSION['email'];
                         }
                         $id= $_SESSION['userid'];
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
 <p><strong>Choose Search a category:</strong></p>
   
 <p><select  name="Chooseacategory" id="Choose " required>
            <option value="3" >food</option>
              <option value="5" >gift</option>
               <option value="1" >study</option>
               <option value="6">holidays</option>
              <option value="7" >fule</option>
              <option value="2" >clothes</option>
                <option value="4" >home</option>
                        
                        
                  </select></p>


  <p><input type="submit" name="submit" value="Search"></p></center>
 
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
 {$Chooseacategory=$_POST['Chooseacategory'];
 
  if (!$Chooseacategory ) {
     echo '<p>You have not entered search details.<br/>
     Please go back and try again.</p>';
     exit;
  }

  // whitelist the searchtype
  switch ($Chooseacategory) {
    case 1:
    case 2:
    case 3:
      case 4:  
        case 5:  
          case 6:  
            case 7:     
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
      $query = "SELECT count,id_user,number_cate ,the_expense,date_expenses,pay_by1,comment FROM expenses WHERE 	id_user='$id' AND number_cate='$Chooseacategory' ";
     
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