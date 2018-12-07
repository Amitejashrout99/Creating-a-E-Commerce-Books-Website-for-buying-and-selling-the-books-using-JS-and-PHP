<?php
    session_start();
    $r=session_id();
    $uname = $_POST['user'];
	$psrd = $_POST['pass'];

	$uname = stripcslashes($uname);
	$psrd = stripcslashes($psrd);
	
	$link = mysqli_connect("localhost","root","","fiction");
    if(mysqli_connect_error()){
    	die ("ERROR");
    }

    $res = "select * from login where username = '".$uname."' and password = '".$psrd."' ";

	$result = mysqli_query($link, $res) 
		or die("Failed to query database ".mysqli_error());

	$row = mysqli_fetch_array($result);
	if ($row['username'] == $uname && $row['password'] == $psrd)
	{
        //echo "<script>
                //document.getElementById('user_text').innerHTML='$uname';
        //</script>";
	}
	else{
		echo "Failed to login";

    }
    
    $_SESSION["username"]="$uname";
    $_SESSION["password"]="$psrd";
    $_SESSION["sessionid"]="$r";
    
    $cookie_name ="user";
    $cookie_value="$uname";
    $cookie_name1="password";
    $cookie_value1="$psrd";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/"); // 86400 = 1 day

    
    if(!isset($_COOKIE[$cookie_name])||!isset($_COOKIE[$cookie_name1])) 
    {
        echo "Cookie named '" . $cookie_name . "' is not set!";
        echo "Cookie named '" . $cookie_name1 . "' is not set!";
    } 
    else 
    {
        echo "<script>
                document.getElementById('welcome_text').innerHTML='Welcome back'+' '+'$_COOKIE[$cookie_name]';
        </script>";
    }
?>
<html>
    <head>
        <title>Administrator Home-page</title>
        <script src="jquery-ui/jquery-ui.js"></script>
        <script src='jquery-3.2.1.min.js'></script>
    </head>
    <style>
        
        body{
            background-image: url("lamp-book.jpg");
            bac
        }
        
        #title_bar
        {
            width:inherit;
            height:70px;
            border-width:5px;
            border-radius: 15px;
            
        }
        #user_id
        {
            width:400px;
            height:60px;
            margin-left: 10px;
            border-width: 2px;
            margin-top:3px;
        }
        #user_image
        {
            width:50px;
            height:50px;
            margin-left: 5px;
            border-radius: 2px;
            border-width:1.5px;
            margin-top: 4px;
            background-image: url("user.jpg");
        }

        #user_info
        {
            width:300px;
            height:50px;
            float:right;
            border-width: 1.5px;
            margin-top:-52px;
            margin-right: 12px;
        }

        #welcome_box
        {
            width:450px;
            height:50px;
            margin-left:500px;
            margin-top: -59px;
        }

        #welcome_text{

            color: whitesmoke;
            font-family: 'Times New Roman', Times, serif;
            font-size: 120%;
            font-weight: bold;
            text-align:center;
        }

        #user_text{
            color: cornsilk;
            font-size: 120%;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bold;
            text-align: center;
        }

        #log_out{
            width:200px;
            height:40px;
            border-radius:5px;
            float: right;
            margin-right: 10px;
            background-color:aqua;
            margin-top:-58px;       
        }
        #main_box1
        {
            width:400px;
            height:500px;
            border-width: 4px;
            margin-top: 40px;
            margin-left: 10px;
        }

        
        #main_box2
        {
            width:400px;
            height:500px;
            border-width: 4px;
            margin-top: -657px;
            margin-left: 460px;
        }

        #main_box3
        {
            width:400px;
            height:500px;
            border-width: 4px;
            margin-top: -649px;
            float: right;
            margin-right: 10px;
        }

        #main_box1_image{
            border-style: solid;
            border-width:2px;
            width:200px;
            height:200px;
            margin-top: 150px;
            margin-left: 90px;
        }

        #main_box2_image
        {
            border-style: solid;
            border-width:2px;
            width:225px;
            height:225px;
            margin-top: 150px;
            margin-left:90px;
        }

        #main_box1_content{
            border-width:2px;
            width:40px;
            height:40px;
            float:right;
            margin-top: -200px;
            display:none;
        }

        #main_box2_content{
            border-width:2px;
            width:40px;
            height:40px;
            float:right;
            margin-top: -200px;
            display:none;
        }

        #main_box3_image
        {
            border-style: solid;
            border-width:2px;
            width:225px;
            height:225px;
            margin-top: 150px;
            margin-left:90px;
        }

        #main_box3_content
        {
            border-width:2px;
            width:40px;
            height:40px;
            float:right;
            margin-top: -200px;
            display:none;
        }

        #log_out
        {
            width:200px;
            height:40px;
            border-style: solid;
            border-radius:5px;
            float: right;
            margin-right: 10px;
            background-color:aqua;
            margin-top:-48px;       
        }
        #user_page
        {
            height:40px;
            width:200px;
            border-radius:10px;
            margin-left:92px;
            border-style: solid;
            border-width:4px;
            margin-top:10px;
            display: none;
        }
        #user_page1
        {
            height:40px;
            width:200px;
            border-radius:10px;
            margin-left:92px;
            border-style: solid;
            border-width:4px;
            margin-top:10px;
            display: none;
        }
        #user_page2
        {
            height:40px;
            width:200px;
            border-radius:10px;
            margin-left:92px;
            border-style: solid;
            border-width:4px;
            margin-top:15px;
            display: none;
        }
        #text1
        {
            color:chartreuse;
            font-style: italic;
            font-family: 'Times New Roman', Times, serif;
            font-size: 150%;
            font-weight: bolder;
            
        }
        #text2
        {
            color:chartreuse;
            font-style: italic;
            font-family: 'Times New Roman', Times, serif;
            font-size: 150%;
            font-weight: bolder;
            
        }

        #text3
        {
            color:chartreuse;
            font-style: italic;
            font-family: 'Times New Roman', Times, serif;
            font-size: 130%;
            font-weight: bolder;
            
        }
        
    </style>
    <body>
    <div id="title_bar">
            <div id="user_id">
                <div id="user_image"></div>
                <div id="user_info"><p id="user_text">erysihihsxi</p></div>
            </div>
            <div id="welcome_box"><p id="welcome_text"></p></div>
            <button id="log_out" name="logout"  method="post"><a href="logout.php">SIGN-OUT</a></button>
        </div>
        <div id="main_box1">
                <div id="main_box1_image">
                    <img src="avatar.png">
                </div>
                <div id="main_box1_content"><p id="text1"></p></div>
                <button id="user_page"><a href="user_display_page _php_version.php" target="true">VISIT USER INFO</a></button>
        </div>
        <div id="main_box2">
                <div id="main_box2_image">
                    <img src="seller1.png">
                </div>
                <div id="main_box2_content"><p id="text2"></p></div>
                <button id="user_page1"><a href="seller_dashboard.php" target="true">VISIT THE SELLER SECTION</a></button>
        </div>
        <div id="main_box3">
                <div id="main_box3_image">
                    <img src="settings.png">;
                </div>
                <div id="main_box3_content"><p id="text3"></p></div>
                <button id="user_page2"><a href="#">ADMINISTRATOR SETTINGS</a></button>
        </div>
        <script>
                $("#main_box1").click(function(){
                        $("#main_box2").hide();
                        $("#main_box3").hide();
                        $("#main_box1_content").show();
                        $("#user_page").show();
                            $(this).animate({
                                width:"1300px",
                                height:"600px",
                                },2000
                            )
                            $("#main_box1_image").animate({
                                marginLeft:"50px",
                                marginTop:"190px",
                            },1000)
                            $("#main_box1_content").animate({
                                width:"800px",
                                height:"400px",
                                marginRight:"10px",
                                marginTop:"-300px",
                            },1000)
                            $("#user_page").animate({
                                marginLeft:"800px",
                                marginTop:"40px",
                            },1000)
                })
                

                $("#main_box2").click(function(){
                        $("#main_box1").hide();
                        $("#main_box3").hide();
                        $("#main_box2_content").show();
                        $("#user_page1").show();
                        $(this).animate({
                            width:"1350px",
                            height:"500px",
                            marginTop:"30px",
                            marginLeft:"-10px",
                            marginRight:"-70px",
                            },2000
                        )
                        $("#main_box2_content").animate({
                                width:"800px",
                                height:"400px",
                                marginRight:"20px",
                                marginTop:"-280px",
                            },1000)
                        $("#user_page1").animate({
                                marginLeft:"850px",
                                marginTop:"-10px",
                        },1000)
                },mycall1())
                
                $("#main_box3").click(function(){
                    $("#main_box1").hide();
                    $("#main_box2").hide();
                    $("#main_box3_content").show();
                    $("#user_page2").show();
                    $(this).animate({
                        width:"1350px",
                        height:"520px",
                        marginTop:"30px",
                        marginRight:'-5px'
                    },2000)

                    $("#main_box3_content").animate({
                                width:"800px",
                                height:"400px",
                                marginRight:"20px",
                                marginTop:"-320px",
                            },1000)
                    $("#user_page2").animate({
                                marginLeft:"860px",
                                marginTop:"-10px",
                    },1000)
                },mycall2())

                //function mycall()
                //{
                    //document.getElementById("text1").innerHTML="This website consist of more then x users at the current moment , All the users have been verified by the appropiate background-check measures to check their authenticity and the number of the sellers are x <br><br> The plan to include more users cum seller are being undergoing to cater to all the people around the community <br> <br> Majority of the users are college students and majority of the sellers are the buisness owners around the area who contribute to the ever rising database of the website";
                //}

                function mycall1()
                {
                    //document.getElementById("text2").innerHTML=" more then 5000 titles including old and new from authors worldwide";
                }

                function mycall2()
                {
                    document.getElementById("text3").innerHTML="The various administrative prvilages that are provided are:<br><br> 1. Ability to see the type of users that have visited the website , the no of logins that they have attempted , session ids <br><br>2. Ability to see the user , their personal details and the number of books that they have bought and whether they are sellers or not and being administartor ability to block a user from visiting the  website <br><br>3. Ability to manipulate the sellers information , the books that they have put up for sale , their personal infomation , and finally the ability to block the seller from putting up books for sale.<br><br>4. Ability to view the authors , identify the no of books that are available per author and to manipulate the website inorder to promote a particular author ";
                }
        </script>
    </body>
</html>
<?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } 
    else 
    {
        echo "<script>
                    document.getElementById('user_text').innerHTML='$_COOKIE[$cookie_name]';
            </script>";

        echo "<script>
                    document.getElementById('welcome_text').innerHTML='Welcome back'+' '+'$_COOKIE[$cookie_name]';
            </script>";
    }
    $link=mysqli_connect("localhost","root","","fiction");
    if(mysqli_connect_error ()){
        echo "there is an error";
    }
    $query="SELECT COUNT(seller_id) FROM seller";
    $query1="SELECT COUNT(author) FROM contents";
    $query2="SELECT COUNT(title) FROM contents";
    if($result=mysqli_query($link,$query))
    {
        while($row=mysqli_fetch_array($result))
        {
            //echo "$row[0]";
            echo "<script>
                document.getElementById('text1').innerHTML='This website consist of more then'+' '+'$row[0]'+' '+'users at the current moment , All the users have been verified by the appropiate background-check measures to check their authenticity and the number of the sellers are' +' '+ '$row[0]' +' '+'<br><br>' + 'The plan to include more users cum seller are being undergoing to cater to all the people around the community <br> <br> Majority of the users are college students and majority of the sellers are the buisness owners around the area who contribute to the ever rising database of the website';
            </script>";
        }
    }
    if($result1=mysqli_query($link,$query1))
    {
        while($row1=mysqli_fetch_array($result1))
        {
            $xyz="$row1[0]";
        }
        echo "$xyz";
    }
    if($result2=mysqli_query($link,$query2))
    {
        while($row2=mysqli_fetch_array($result2))
        {
            $xyz1="$row2[0]";
        }
    }
    echo "<script>
        document.getElementById('text2').innerHTML='The website contains more then'+' '+'$xyz1'+' '+'books at the moment from more then'+' '+'$xyz'+' '+'authors' +'<br> <br>'+ 'All the books have been categorized into genres and also on the basis of the ratings and the price which helps in the proper choice of buying the book'+'<br> <br>'+ 'The website also displays the number of books, their details , their isbn' + '<br><br>'+ 'Under administartive privelages you can change the various visibility of the books and change their acccesibility <br><br>';
    </script>";
?>