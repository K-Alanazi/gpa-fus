<?php



    require('./inc/db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `student` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $queryF   = "SELECT * FROM `faculty` WHERE username='$username'
                     AND password='" . ($password) . "'";
        $result = mysqli_query($conn, $query) ;
        $resultF = mysqli_query($conn, $queryF) ;
        $rows = mysqli_num_rows($result);
        $rowsF = mysqli_num_rows($resultF);
        //////////////////////////////////////////////////////////////////////////
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: ./homepage/student.php");
        } elseif ($rowsF == 1) {
                $_SESSION['username'] = $username;
                // Redirect to user dashboard page
                header("Location: ./homepage/faculty.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {





        
       }


  



  



?>