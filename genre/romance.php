<!DOCTYPE html>
<html>
    <head>
        <title>Buy Books of Genre Romance</title>
  <link rel='stylesheet' type='text/css' href='../style.css'>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
  <script type="text/javascript" src="../bootstrap/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  <script src="../js/login_sms.js"></script>
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
                <a href="../index.php" class="navbar-brand" style="color:#fff">E-BOOK</a>
            </div>
            <div class="dropdown">
            <button class="dropbtn">Genre</button>
                <div class="dropdown-content">
                    <a href="children_literature.php">Children's literature</a>
                    <a href="fiction.php">Fiction</a>
                    <a href="horror_fiction.php">Horror Fiction</a>
                    <a href="mystery.php">Mystery</a>
                    <a href="non_fiction.php">Non-Fiction</a>
                    <a href="novel.php">Novel</a>   
                    <a href="romance.php">Romance</a>
                    <a href="sci_fi.php">Sci-Fiction</a>
                    <a href="sci_tech.php">Science and Technology</a>
                </div>
            </div>
            <ul class="nav navbar-nav navbar-right" id="mynav">
                <li>
                    <a href="../signup.php" target="by_view"><span class="glyphicon glyphicon-user"> </span> Sign Up    </a>
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
        <form method="post">
          <input type="text" name="email" placeholder="Email"/>
          <input type="password" name="password" placeholder="Password"/>
          <input type="submit" name="signup-button" value="Login"/>
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
      <div class="jumbotron jumbotron-fluid" style="background:url('img/RomanticBanner.jpg')">
                
        </div>

        <div id="first_book">
            <div class="image">
            </div>
            <div class="title">
            </div>
            <div class="author">
            </div>
            <div class="cost">
            </div>
            <div class="ranking">
            </div>
            <button type="submit"  id="submission" style="background-color: red;
                    color: #fff;"><a style="color: #fff;" href="extract_book.php" target="_blank">Buy-Now</a></button>
            <button type="submit"  id="submission1" style="background-color: red;
                    color: #fff;">Add To Cart</button>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </body>
</html>
<?php
  /*$link=mysqli_connect("localhost","root","","fiction");
  if(mysqli_connect_error ()){
    echo "there is an error";
  }
  echo "<br>";
  $query="SELECT * FROM contents";
  if($result=mysqli_query($link,$query))
  {
    while($row=mysqli_fetch_array($result)){
        $e = $row[0];
        echo "<div class='title'>."."<p style='color:black;font-size:200%;'>".$e."</div>";
        echo "<p style='color:black;font-size:200%;'>"."The Book name is"." ".$row[1]."</p>"."<br>";
        echo "<p style='color:black;font-size:200%;'>"."The issue date of the book is"." ".$row[2]."</p>"."<br>";
        echo "<p style='color:black;font-size:200%;'>"."The return date of the book is"." ".$row[3]."</p>"."<br>";
    }
  }*/
?>