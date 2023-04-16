<?php
//include auth_session.php file on all user panel pages
include '../auth_session.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>student - Home</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="./style.css">

</head>
<body>

    <main>
        <header>
            <img src="./img/جامعه المجمعه الطلاب.svg">
          <span class="byline"><h2></h2></span>
        </header>
        </main>

<!-- navvv alllll -->
<nav class="navbar navbar-expand-custom navbar-mainbg">

        <a class="navbar-brand navbar-logo" href="#"><?php echo $_SESSION['username']; ?></a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="./student.php"><i class="fas fa-tachometer-alt"></i>Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Student page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="com_mem_s.php"><i class="far fa-clone"></i>Evaluation members</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Information</a>
                </li> 
            </ul>
        </div>
    </nav>

<!---------------------------------responsive service------------------------------------------------------------------------------>
  <main>
    <section>

                <!------------******************** ******************--------------->   
                <div class="service-item"><a class="service-content" href="./proposal/index.php">
                    <div class="service-bg"></div>
                    <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 16 16" width="72" height="72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" id="IconChangeColor"> <path d="m14.25 9.25v-3.25l-6.25-3.25-6.25 3.25 6.25 3.25 3.25-1.5v3.5c0 1-1.5 2-3.25 2s-3.25-1-3.25-2v-3.5" id="mainIconPathAttribute" fill="#ffffff"></path> </svg>                    </div>
                    <h3 class="epsilon">Proposal</h3></a></div>
                </div>

                <div class="service-item"><a class="service-content" href="./proposal/index2.php">
                    <div class="service-bg"></div>
                    <div class="service-icon">
                    <svg width="72" height="72" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" id="IconChangeColor"> <path d="M22 14V8.5M6 13V6C6 4.34315 7.34315 3 9 3H14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" id="mainIconPathAttribute" fill="#ffffff"></path> <path d="M16.9922 4H19.9922M22.9922 4L19.9922 4M19.9922 4V1M19.9922 4V7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" id="mainIconPathAttribute" fill="#ffffff"></path> <path d="M12 21H6C3.79086 21 2 19.2091 2 17C2 14.7909 3.79086 13 6 13H17H18C15.7909 13 14 14.7909 14 17C14 19.2091 15.7909 21 18 21C20.2091 21 22 19.2091 22 17V14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" id="mainIconPathAttribute" fill="#ffffff"></path> </svg>                
                
                </div>
                    <h3 class="epsilon">Second presentation</h3></a></div>
                </div>

                <div class="service-item"><a class="service-content" href="./proposal/index3.php">
                    <div class="service-bg"></div>
                    <div class="service-icon">
                    <svg width="72" height="72" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" id="IconChangeColor"> <path d="M18 6H20M22 6H20M20 6V4M20 6V8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" id="mainIconPathAttribute" fill="#ffffff"></path> <path d="M21.4 20H2.6C2.26863 20 2 19.7314 2 19.4V11H21.4C21.7314 11 22 11.2686 22 11.6V19.4C22 19.7314 21.7314 20 21.4 20Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" id="mainIconPathAttribute" fill="#ffffff"></path> <path d="M2 11V4.6C2 4.26863 2.26863 4 2.6 4H8.77805C8.92127 4 9.05977 4.05124 9.16852 4.14445L12.3315 6.85555C12.4402 6.94876 12.5787 7 12.722 7H14" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" id="mainIconPathAttribute" fill="#ffffff"></path> </svg>                
                </div>
                    
                    <h3 class="epsilon">Third presentation</h3></a></div>
                </div>

                <div class="service-item"><a class="service-content" href="./proposal/index4.php">
                    <div class="service-bg"></div>
                    <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="IconChangeColor" height="72" width="72"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M45.63 79.75L52 81.25v58.5C45 143.9 40 151.3 40 160c0 8.375 4.625 15.38 11.12 19.75L35.5 242C33.75 248.9 37.63 256 43.13 256h41.75c5.5 0 9.375-7.125 7.625-13.1L76.88 179.8C83.38 175.4 88 168.4 88 160c0-8.75-5-16.12-12-20.25V87.13L128 99.63l.001 60.37c0 70.75 57.25 128 128 128s127.1-57.25 127.1-128L384 99.62l82.25-19.87c18.25-4.375 18.25-27 0-31.5l-190.4-46c-13-3-26.62-3-39.63 0l-190.6 46C27.5 52.63 27.5 75.38 45.63 79.75zM359.2 312.8l-103.2 103.2l-103.2-103.2c-69.93 22.3-120.8 87.2-120.8 164.5C32 496.5 47.53 512 66.67 512h378.7C464.5 512 480 496.5 480 477.3C480 400 429.1 335.1 359.2 312.8z" id="mainIconPathAttribute" fill="#000000"></path></svg>                    
                </div>
                    <h3 class="epsilon">Final presentation</h3></a></div>
                </div>

                    
                <div class="service-item"><a class="service-content" href="../status/student/index.php">
                    <div class="service-bg"></div>
                    <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" id="mainIconPathAttribute" fill="#000000"></path> <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" id="mainIconPathAttribute" fill="#000000"></path> </svg>                    </div>
                    <h3 class="epsilon">proposal status</h3></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<!-- partial --------------------------------------------->
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script><script  src="./script.js"></script>

</body>
</html>
