<?php
$servername = "localhost"; 
$username = "root";    
$password = "";   
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error)
{
    echo "توجد مشكلة في الاتصال: " . $conn->connect_error;
}
else
{
    echo "تم الاتصال بنجاح";
}
 

$insert_data = $conn -> query("INSERT INTO user (id, first_name, middle_name, last_name,phon_nember,emil,passwordd,function_nub)
VALUES (1, 'Alaa ','Najmi','ahah','96650000000', 'alaa@alaa.com','154875221',2)");
if (($insert_data) === TRUE) {
    echo "تم إضافة البيانات للجدول";
}
else
{
    echo " خطأ، لم يتم اضافة البيانات :". $conn->error;
}
?>