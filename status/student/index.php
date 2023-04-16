<?php 
include 'form.php';
include '../../auth_session.php';


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Order Status</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="./style.css">
<!---المشكلة هنا-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./styless.css">
    <!-- CSS only -->
    

<link rel="stylesheet" href="./styled.css">
</head>
<body>

    <main>
        <header>
            <img src="./img/جامعه المجمعه الطلابب.png">
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
                    <a class="nav-link" href="../../homepage/graduate.php"><i class="fas fa-tachometer-alt"></i>home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>porposel</a>
                </li>
            
           
            </ul>
        </div>
    </nav>
</div>
<!---------------------------------responsive service------------------------------------------------------------------------------>


<!-----------------test--------------->



<?php

$sql = mysqli_query($conn ,"select title, gname
		from c633 , groups 
    where c633.id = 1 ");
        while($user = mysqli_fetch_assoc($sql)){$title =   $user['title']; $name =   $user['gname']; } 	



?>

<?php

$sql = mysqli_query($conn ,"select * from pstatus where pstatus.id = 1 ");
        while($user = mysqli_fetch_assoc($sql)){$note =   $user['comment']; $report =   $user['report']; } 	




?>
<!------////////////////////******************************** الاداة الخاصة بالرفع***********************/////////////////////////////////////////////////----------->
<div class="omarsaad">

<!-- partial:index.partial.html -->
<div id='container'>
    <div class='panel panel-primary'>
     
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Study Division</th>
            <th scope="col">Graduation project topic</th>
            <th scope="col">Important note / reason</th>   
            <th scope="col">Order status</th>
          </tr>
        </thead>
        <tbody>
<!-------------********************************ROWSS 1************************---------------------------->
          <tr>
            <th scope="row">1</th>
            <td><?php echo $name; ?></td>
            <td><?php echo $title; ?></td>
            <td><textarea style="width: 340px; resize: none;"> <?php echo $note; ?> </textarea></td>
            <td><?php echo $report; ?></td>
          </tr>
          <!-------------********************************ROWSS 2************************---------------------------->
          <?php

$sql2 = mysqli_query($conn ,"select title, gname
		from c633 , groups 
    where c633.id = 2 ");
        while($user = mysqli_fetch_assoc($sql2)){$title2 =   $user['title']; $name2 =   $user['gname']; } 	



?>

<?php

$sql = mysqli_query($conn ,"select * from pstatus  where pstatus.id = 2  ");
        while($user = mysqli_fetch_assoc($sql)){$note2 =   $user['comment']; $report2 =   $user['report']; } 	




?>

          <tr>
            <th scope="row">1</th>
            <td><?php echo $name2; ?></td>
            <td><?php echo $title2; ?></td>
            <td><textarea style="width: 340px; resize: none;"> <?php echo $note2; ?> </textarea></td>
            <td><?php echo $report2; ?></td>
          </tr>
          
          <tr>
          
          <th scope="row">3</th>
          <td></td>
          <td></td>
          <td><textarea style="width: 340px; resize: none;">  </textarea></td>
          <td></td>
          </form>
        </tr>
        <tr>
          
            <th scope="row">4</th>
            <td></td>
            <td></td>
            <td><textarea style="width: 340px; resize: none;"> </textarea></td>
            <td></td>
          </tr>
      
        </tbody>
      </table>
    
  
  
      </div>
    </div>
  </div>





</div>

    









<!-- partial --------------------------------------------->
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="./script.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="./ap.js"></script>
 

</body>
</html>
