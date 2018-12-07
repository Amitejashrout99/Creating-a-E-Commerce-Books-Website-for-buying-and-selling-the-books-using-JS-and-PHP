<?php include('user_regis.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>E-Book</title>
  <link rel='stylesheet' type='text/css' href='style.css'>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
  <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  <script src="js/login_sms.js"></script>
  <script
        src="http://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
        <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
</head>


<body>
    <nav class="navbar navbar-fixed-top" id="nav">
        <div class="container">
            <div class="navbar-header" id="logo">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#mynav">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                <a href="#" class="navbar-brand" style="color:#fff">E-BOOK</a>
            </div>
            <div class="dropdown">
            <button class="dropbtn">Genre</button>
                <div class="dropdown-content">
                    <a href="genre/children_literature.php">Children's literature</a>
                    <a href="genre/fiction.php">Fiction</a>
                    <a href="genre/horror_fiction.php">Horror Fiction</a>
                    <a href="genre/mystery.php">Mystery</a>
                    <a href="genre/non_fiction.php">Non-Fiction</a>
                    <a href="genre/novel.php">Novel</a>   
                    <a href="genre/romance.php">Romance</a>
                    <a href="genre/sci_fi.php">Sci-Fiction</a>
                    <a href="genre/sci_tech.php">Science and Technology</a>
                </div>
            </div>
            <ul class="nav navbar-nav navbar-right" id="mynav">
                <li>
                    <a href="signup.php" target="by_view"><span class="glyphicon glyphicon-user"> </span> Sign Up    </a>
                </li> 
                <li>
                    <a data-toggle="modal" data-target="#mymodal" ><span class="glyphicon glyphicon-log-in"> </span> Login</a>
                </li>       
           </ul>  
        </div>
        </nav>
    
    <div class="modal" id="mymodal">
    <div id="login-box" class="animate">
    
      <div class="left-box">
        <h1> Login </h1>
        <form method="post" action="index.php">
            <?php include('errors.php');?>
            <input type="text" name="email" placeholder="Email" required/>
            <input type="password" name="password" placeholder="Password" required/>
          <input type="submit" name="login" value="Login"/>
        </form>
      </div>
      <div class="right-box">
          <span data-dismiss="modal" class="close" title="Close PopUp">X</span>
          <span class="signinwith">Instant Login</span>
        
        <?php
      if(isset($_SESSION['username'])):
      ?>
      <p>Hello <?=$_SESSION['username']?>. You're logged In.</p>
      <p><a href="response.php?logout=true">Logout</a>
      <?php
      else:
      ?>
      <div>
          <form method="post" action="response.php" id="frm_login">          
          <input type="hidden" name="login"/>
          <input type="hidden" name="code" id="login_code"/>
          <input type="hidden" name="login_via" id="login_via"/>
        </form>
          <button class="social facebook" onclick="loginWithSMS();">Login By SMS</button>    
      </div>
      <?php endif; ?> 
            
        
     </div>
        <div class="or">OR</div>
    </div>
    </div>
    <div class="banner">
            
            <!--Begin banner -->

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                          <img src="genre/img/Fictionbanner.jpg" style="width:100%; height: 500px;">
                      </div>
                
                      <div class="item">
                          <img src="genre/img/novelBanner.jpg" style="width:100%; height: 500px;">
                      </div>
                    
                      <div class="item">
                          <img src="genre/img/MysteryBanner.jpg"  style="width:100%;height: 500px;">
                      </div>
                
                      <div class="item">
                          <img src="genre/img/childrenBanner.png" style="width:100%; height:500px;">
                      </div>
                
                    </div>
                
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>


            <!--End banner -->

        </div>
     
        <div class = "books-container">
            <div class="book">
                book1
            </div>
            <div class="book">
                book2
            </div>
            <div class="book">
                book3
            </div>
            <div class="book">
                book4
            </div>
            <div class="book">
                book5
            </div>
        </div>
        <div class="bottom">
            <div class="row">
                <div class="col-md-6" style="padding-left: 100px;">
                    <h1>Sell with us?</h1>
                </div>
                <div class="col-md-4">
                    <a href="sell.php"><div class="btn btn-primary" style="height: 50px; width: 150px; padding-top: 15px">
                            Sell Now</div></a>
                </div>
            </div>
        </div>
    
        <footer id="l1">          
            <center><p>All Rights Reserved | Contact Us: +91 90000 00000</p></center>
        </footer>
<?php
if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
  echo "<script type='text/javascript'>alert('".$_SESSION['message']."');</script>";
  $_SESSION['message'] = '';
}
?>
    
</body>
</html>