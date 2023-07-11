
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

  <p>
    <table user="2">
      <tr>
        <td>Id</td>
        <td>number acategory</td>
        <td>name acategory</td>
        <td>the amount</td>
        <td>pay by</td>
        <td>comment</td>
        <td>data</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>
</p>
      <?php

      require_once 'databes.php';
      $conn = new mysqli($hn, $un, $pw, $db); // Using database connection file here
      if ($conn->connect_error) {
        echo '<p>Error: Could not connect to database.<br/>
    Please try again later.<br/></p>';
        echo $conn->error;
        exit;
      }
      $query = "SELECT 	id_num ,number_categories ,name_categories,payby,data_categories,comment,the_amount FROM 	categories WHERE 	id_num='$id'";
    
      $result = $conn->query($query);
      if (!$result) {
        echo "<p>Unable to execute the query.</p> ";
        echo $query;
        die($conn->error);
      }
      // fetch data from database
      
      while ($data = $result->fetch_array(MYSQLI_ASSOC)) {
        ?>
        <tr>
          <td>
            <?php
           
             echo $data['id_num']; ?>
          </td>
          <td>
            <?php echo $data['number_categories']; ?>
          </td>
          <td>
            <?php echo $data['name_categories']; ?>
          </td>
          <td>
            <?php echo $data['the_amount']; ?>
          </td>
          <td>
            <?php echo $data['payby']; ?>
          </td>
          <td>
            <?php echo $data['comment']; ?>
          </td>
          <td>
            <?php echo $data['data_categories']; ?>
          </td>
          
        
         <td><button><a href="editcategories.php?number_categories=<?php echo $data['number_categories'];?>">Edit</a></button></td> 
         <td><button><a href="?number_categories=<?php echo $data['number_categories']; ?>"></a>Delete</button></td>
          </td>

        </tr>
        <?php
      }
      ?>
    </table>


  </form>
</body>

</html>