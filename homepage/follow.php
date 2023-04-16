<?php 
include './proposal/form.php';
include '../../auth_session.php';


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> - HOME - FACULTY</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="./style.css">
<!---المشكلة هنا-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./styless.css">

</head>
<body>

    <main>
        <header>
            <img src="./img/جامعه المجمعه الطلاب.jpg">
          <span class="byline"><h2></h2></span>
        </header>
        </main>









<!-- navvv alllll -->
<div class="saadali">
<nav class="navbar navbar-expand-custom navbar-mainbg">

        <a class="navbar-brand navbar-logo" href="#"> <?php echo $_SESSION['username']; ?> </a>


        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="faculty.php"><i class="fas fa-tachometer-alt"></i>Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Follow up students</a>
                </li>
            
           
            </ul>
        </div>
    </nav>
</div>
<!---------------------------------responsive service------------------------------------------------------------------------------>



<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project";

// إجراء الإتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الإتصال
if ($conn->connect_error) {
    die("فشل الإتصال: " . $conn->connect_error);
}
?>


<h1 style="font-size: 25px;text-align: center;margin: 20px;color: #f00;">Students List</h1>
	<table border="1" class="table">
	  <thead>
		<tr>
		  <th scope="col">Group Number</th>
		  <th scope="col">Division Number</th>
		  <th scope="col">ID</th>
		  <th scope="col">Firstname</th>
		  <th scope="col">Lastname</th>
		</tr>
	  </thead>
	  <tbody>
	  <?php

		$sql = mysqli_query($conn ,"select gname, username, firstname,lastname
		from groups , student  
		where groups.s_id1 = student.id   ");
		$sql2 = mysqli_query($conn ,"select gname, username, firstname,lastname
		from groups , student  
		where groups.s_id2 = student.id   ");
		$sql3 = mysqli_query($conn ,"select gname, username, firstname,lastname
		from groups , student  
		where groups.s_id3 = student.id   ");
		$num = 1;
		while($user = mysqli_fetch_assoc($sql)){
			echo '
					<tr>
					  <th scope="row">'.$num++.'</th>
					  <td>'.$user['gname'].'</td>
					  <td>'.$user['username'].'</td>
					  <td>'.$user['firstname'].'</td>
					  <td>'.$user['lastname'].'</td>
			';	
			$num2 = 1;
		while($user1 = mysqli_fetch_assoc($sql2)){
			echo '
					<tr>
					  <th scope="row">'.$num2++.'</th>
					  <td>'.$user1['gname'].'</td>
					  <td>'.$user1['username'].'</td>
					  <td>'.$user1['firstname'].'</td>
					  <td>'.$user1['lastname'].'</td>		 
			';
			$num3 = 1;
			while($user1 = mysqli_fetch_assoc($sql3)){
				echo '
						<tr>
						  <th scope="row">'.$num3++.'</th>
						  <td>'.$user1['gname'].'</td>
						  <td>'.$user1['username'].'</td>
						  <td>'.$user1['firstname'].'</td>
						  <td>'.$user1['lastname'].'</td>		 
			';	
		}
		}
		}	



	?>
  </tbody>
</table>








<!-- partial --------------------------------------------->
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="./script.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="./ap.js"></script>
 

</body>
</html>
