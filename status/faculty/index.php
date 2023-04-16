<?php 
include 'form.php';
include '../../auth_session.php';


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> - HOME - FACULTY</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel="stylesheet" href="stylef.css">
    <link rel="stylesheet" href="style.css">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="./style.css">
<!---المشكلة هنا-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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
                    <a class="nav-link" href="../../homepage/faculty.php"><i class="fas fa-tachometer-alt"></i>Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>status</a>
                </li>
            
           
            </ul>
        </div>
    </nav>
</div>
<!---------------------------------responsive service------------------------------------------------------------------------------>



<h1 style="font-size: 25px;text-align: center;margin: 20px;color: #f00;">Evaluate Projects</h1>

    
<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Study Division</th>
            <th scope="col">Graduation project topic</th>
            <th scope="col">Enter status</th>
            <th scope="col">Important note / reason</th>
            <th scope="col">Send status</th>
            <th scope="col">Rebort</th>
          </tr>
        </thead>
        <tbody>
<!-------------********************************ROWSS 1************************---------------------------->
          <tr>
            <th scope="row">1</th>
            <td> <?php echo $name; ?> </td>
            <td> <?php echo $title; ?> </td>
                      <td>
                      <form action="index.php" method="POST">
                      <input type="checkbox" id="checkbox" name="name" value="no" hidden/>
                      <label for="checkbox">
                      <div class="slider-wrapper">
                      <div class="slider-options">
                      <div class="slider-option slider-option-yes">Yes</div>
                      <div class="slider-option-selector"></div>
                      <div class="slider-option slider-option-no">No</div>
                      </div>
                      </div>
                      </label>
                      
                      </td>
            <td><input type="text" name='comment' ></td>
            <td><button type="submit" name="send" class="btn btn-primary">send</button></td>
            <td><?php echo $stite; ?></td>
            </form>
          </tr>
          <tr>
<!-------------***********************************ROWSS 2**********************---------------------------->
            <th scope="row">2</th>
            <td>S644</td>
            <td>smart parking</td>
            <td>
            <form action="index.php" method="POST">
                <input type="checkbox" id="checkbox1" name="name2" value="no" hidden/>
                <label for="checkbox1">
                  <div class="slider-wrapper">
                    <div class="slider-options">
                      <div class="slider-option slider-option-yes">Yes</div>
                      <div class="slider-option-selector"></div>
                      <div class="slider-option slider-option-no">No</div>
                    </div>
                  </div>
                </label>
            </td>


            <td><input type="text" name="oppo2" ></td>
            <td><button type="submit" name="send2"class="btn btn-primary">send</button></td>
            <td><?php echo $stite2; ?> </td>
            </form>
          </tr>
 <!-------------***********************************ROWSS 3**************---------------------------->
          <tr>
            <th scope="row">3</th>
            <td>S655</td>
            <td>HR system for hotels</td>
            <form action="index.php" method="POST">
            <td>
                <input type="checkbox" id="checkbox2" name="name3" value="no" hidden/>
                <label for="checkbox2">
                  <div class="slider-wrapper">
                    <div class="slider-options">
                      <div class="slider-option slider-option-yes">Yes</div>
                      <div class="slider-option-selector"></div>
                      <div class="slider-option slider-option-no">No</div>
                    </div>
                  </div>
                </label>
                </td>
            <td><input type="text" name="oppo3" ></td>
            <td><button type="submit" name="send3"class="btn btn-primary">send</button></td>
            <td><?php echo $stite3; ?> </td>
            </form>
          </tr>
<!-------------***********************************ROWSS 4**********************---------------------------->
          <tr>
            <th scope="row">4</th>
            <td>S666</td>
            <td>Medical assessment</td>
            <form action="index.php" method="POST">
            <td>
                <input type="checkbox" id="checkbox3" name="name4" value="no" hidden/>
                <label for="checkbox3">
                  <div class="slider-wrapper">
                    <div class="slider-options">
                      <div class="slider-option slider-option-yes">Yes</div>
                      <div class="slider-option-selector"></div>
                      <div class="slider-option slider-option-no">No</div>
                    </div>
                  </div>
                </label>
                </td>
            <td><input type="text" name="oppo4" ></td>
            <td><button type="submit" name="send4" class="btn btn-primary">send</button></td>
            <td><?php echo $stite4; ?> </td>
            </form>
          </tr>

<!-------------***********************************ROWSS 5**********************---------------------------->
          <tr>
            <th scope="row">5</th>
            <td>S677</td>
            <td>Translate texts into audio</td>
            <form action="index.php" method="POST">
            <td>
                <input type="checkbox" id="checkbox4" name="name5" value="no" hidden/>
                <label for="checkbox4">
                  <div class="slider-wrapper">
                    <div class="slider-options">
                      <div class="slider-option slider-option-yes">Yes</div>
                      <div class="slider-option-selector"></div>
                      <div class="slider-option slider-option-no">No</div>
                    </div>
                  </div>
                </label>
                </td>
            <td><input type="text" name="oppo5"></td>
            <td><button type="submit" name="send5"class="btn btn-primary">send</button></td>
            <td><?php echo $stite5; ?> </td>
            </form>
          </tr>

<!-------------**********************************END ROWS = 5 ROWS***********************---------------------------->
      
        </tbody>
      </table>











<!-- partial --------------------------------------------->
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="./script.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="./ap.js"></script>
 

</body>
</html>
