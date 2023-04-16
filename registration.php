<?php
//include './inc/formreg.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css"/>
<!-------روابط الخطوط----->
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
</head>
<body>
<!------------------------يداية كود PHP------------------>

<?php
    require('./inc/db.php');

    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);

        $firstname = stripslashes($_REQUEST['firstname']);
        //escapes special characters in a string
        $firstname = mysqli_real_escape_string($conn, $firstname);

        $lastname = stripslashes($_REQUEST['lastname']);
        //escapes special characters in a string
        $lastname = mysqli_real_escape_string($conn, $lastname);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);



        $datetime = date("Y-m-d H:i:s");
        ////// md5 خوارزمية تشفير من php
        $query    = "INSERT into `student` (username,firstname, lastname, password, email, datetime)
                     VALUES ('$username','$firstname','$lastname', '" . md5($password) . "', '$email', '$datetime')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <h2 class='link'>Click here to <a href='login.php'>Login</a></h2>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <h2 class='link'>Click here to <a href='registration.php'>registration</a> again.</h2>
                  </div>";
        }
    } else {
?>


<!-----فورمات الارسال والتحكم------>    
<div class="container2">
<form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />

        <input type="text" class="login-input" name="firstname" placeholder="Firstname" required />
        <input type="text" class="login-input" name="lastname" placeholder="Lastname" required />

        <input type="email" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>

    </form>

</div>
<?php
    }
?>   
</body>
</html>