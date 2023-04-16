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
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="./style.css">
<!---المشكلة هنا-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./styless.css">

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
                    <a class="nav-link" href="../faculty.php"><i class="fas fa-tachometer-alt"></i>home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>proposals</a>
                </li>
            
           
            </ul>
        </div>
    </nav>
</div>
<!---------------------------------responsive service------------------------------------------------------------------------------>


<!-----------------test--------------->







<!------////////////////////******************************** الاداة الخاصة بالرفع***********************/////////////////////////////////////////////////----------->
<div class="omarsaad">

<!-- partial:index.partial.html -->
<div id='container'>
    <div class='panel panel-primary'>
     
    
  




        
    <form action="index.php" method="POST">

            <div class="container">
              <div class="radioGroup">
              <input type="radio" name="options" value="s633" id="option1" checked>
              <label for="option1">cs633</label>
               
              <input type="radio" name="options" value="s644" id="option2">
              <label for="option2">cs644</label>
              
              <input type="radio" name="options" value="s655" id="option3">
              <label for="option3">cs655</label>
              
              <input type="radio" name="options" value="s666" id="option4">
              <label for="option4">cs666</label>
              
              <input type="radio" name="options" value="s677" id="option5">
              <label for="option5">cs677</label>
                
              <span class="indicator"></span>
              </div><br>
            </div><br>
          
          
      
            <!---------here start radio button two ------>
           
          

            <div class="slider">
              <div class="line"></div>
              <div class="custom-checkbox left">
                      <input type="radio" id="strongly-disagree" name="agreement" value="propsel"class="regular-radio" />
                <label for="strongly-disagree">
                      <div class="tag">proposal</div>
                </label>
                </div>
              <div class="custom-checkbox left">
                      <input type="radio" id="disagree" name="agreement" value="frist_view"class="regular-radio" />
                <label for="disagree">
                      <div class="tag">Second view</div>
                </label>
                </div>
              <div class="custom-checkbox">
                      <input type="radio"  id="neutral" name="agreement" value="secend_view"class="regular-radio" />
                <label for="neutral">
                      <div class="tag">Third view</div>
                </label>
                </div>
              <div class="custom-checkbox right">
                      <input type="radio"  id="agree" name="agreement" value="final_view"class="regular-radio" />
                <label for="agree">
                      <div class="tag">Final view</div>
                </label><br>
                </div><br>  
</div><br>
<button type="submit" name="send" class="btn btn-success">Select</button>
<!--This button opens Result.php-->
</form ><br>

          

<!------------------------------------------------------>

<div class="">


<!----<H4></H4><br>---->
<div class="mom">GRADOATION.PROJECT SUBJECT:  </div>
<div class="form-floating">
  <textarea class="form-control bbb" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px; width: 600px;">
   <?php echo $title;?></textarea> 
</div>

</div><br>








<!------------------------------------------------------>
<div class="">

    <div class=""></div>


    <div class="mom">ABSTRACT</div>
    <div class="form-floating">
    <textarea class="form-control aaa" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 350px; width: 600px;">
    <?php echo $desc;?></textarea> 
  </div>
<!------------------------comuunt area--------------------->


<!------------------------communt area-------------------->


<!------------------------download button--------------------->
   <label>Download File</label> <div class="vn-red" style="text-align: center;">
                  
   <a href="download.php?id=<?php echo $file;?>" class="btn btn-primary">Download</a>
           <!------------------------download button------>
              
        </div>   
       

  
  
  
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
