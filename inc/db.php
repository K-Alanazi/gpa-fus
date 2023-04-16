<?php


/// كود الاتصال بقاعدة البيانات اخر متغير اسم القاعدة 
$conn = mysqli_connect('localhost', 'root','root','project');
//// كود التحقق من الاتصال بقاعد البيانات
if($conn){
    echo 'success';
}else{
    echo 'fail';
}
?>