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
      * تعدل بيانات المستخدم
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
                         ?>
  
    </header>
   
 
      <?php
    require_once 'databes.php'; 
    $conn = new mysqli($hn, $un, $pw, $db);
    
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
    </table>
    

  </form>
</body>

</html>