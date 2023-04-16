<?php
include '../auth_session.php';

// connect to the database
$conn = mysqli_connect('localhost', 'root', 'root', 'project');

if($conn){
    echo 'success';
    echo "<br>";
}else{
    echo 'fail';
}



$image = $_FILES["myfile"];

$name = $image["name"];
$type = $image["type"];

       
       




// When form submitted, insert values into the database.
    if (isset($_POST['send'])) {
     




        $title = $_POST['name'];
        $text = $_POST['message'];
        


        $create_datetime = date("Y-m-d H:i:s");
        
        $query    = "INSERT into c633 (title, abstract,file, name, type,  date)
                     VALUES ('$title', '$text', '$image', '$name', '$type','$create_datetime')";

        $result   = mysqli_query($conn, $query);

        if ($result) {
            echo "<div class='form'>
                  <h3> Send successfully.</h3><br/>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  </div>";
        }
    }
?>







