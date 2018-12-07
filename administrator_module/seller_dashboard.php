<?php
    $cookie_name ="user";
    $cookie_name1="password";
    session_start();
    $sesid=session_id();
?>
<html>
    <head>
        <title>View Registered User</title>
        <script src='jquery-3.2.1.min.js'></script>
        <script src="jquery-ui.js"></script>
    </head>
    <style>
         body{
            background-image: url("bg33.png");
            background-attachment: fixed;
        }
        
        #title_bar
        {
            width:inherit;
            height:70px;
            border-width:5px;
            border-style: solid;
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

        #welcome_text
        {
            color: whitesmoke;
            font-family: 'Times New Roman', Times, serif;
            font-size: 120%;
            font-weight: bold;
            text-align:center;
        }
        #banner{
            margin-top:80px;
            margin-left:10px;
        }
        #user_display
        {
            width:inherit;
            height:570px;
            border-width:3px;
        }
        #user_information
        {
            width:990px;
            height:200px;
            border-width:3px;
            margin-left:270px;
            margin-top:-206px;
        }
        #banner_text
        {
            color:whitesmoke;
            font-family: 'Times New Roman', Times, serif;
            font-size: 180%;
            font-weight: bolder;
            text-align: center;
            font-style: italic;
            margin-left:80px;
        }
        #books_information
        {
            width:1315px;
            border-width:3px;
            height:250px;
            margin-top: 10px;
            margin-left:5px;
        }
        
        #unblock_users{
            width:300px;
            height:50px;
            border-style: solid;
            margin-right:10px;
            border-radius: 8px;
            margin-top:-180px;
            float:right;
        }
       
    </style>
    <body>
        <div id="title_bar">
            <div id="user_id">
                <div id="user_image"></div>
                <div id="user_info"><p id="user_text">erysihihsxi</p></div>
            </div>
            <div id="welcome_box"><p id="welcome_text"></p></div>
            <button id="log_out" name="logout"  method="post"><a href="administartor_login.html">SIGN-OUT</a></button>
        </div>
        <h3 id="banner">
            <p id="banner_text">"When The Customer Comes first, The Customer will last"</p>
        </h3>
        
        <hr><br>
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

    $_SESSION["username"]="$_COOKIE[$cookie_name]";
    $_SESSION["password"]="$_COOKIE[$cookie_name1]";
    $_SESSION["sessionid"]="$sesid";

    $link=mysqli_connect("localhost","root","","fiction");
    if(mysqli_connect_error ()){
        echo "there is an error";
    }
    echo "<br>";
    $query="SELECT * FROM user";
    echo "<br>";
    function create_new_id($q, $ab , $cd , $ef , $gh , $ij, $ku, $mer, $ert , $ghy , $mnb )
    {
        $x=$ab;
        $y=$cd;
        $z=$ef;
        $u=$gh;
        $iop=$ij;
        $ytr=$ku;
        $tre=$mer;
        $yui=$ert;
        $dse=$ghy;
        $zzz=$mnb;
        $x=$x.$q;
        $y=$y.$q;
        $z=$z.$q;
        $u=$u.$q;
        $iop=$iop.$q;
        $ytr=$ytr.$q;
        $tre=$tre.$q;
        $yui=$yui.$q;
        $dse=$dse.$q;
        $zzz=$zzz.$q;
        $id_new = array($x,$y,$z,$u,$iop,$ytr,$tre,$yui,$dse,$zzz);
        $x=$y=$u=$z=$iop=$ytr=$tre=$yui=$dse=$zzz=0;
        return $id_new;
    }
    if($result=mysqli_query($link,$query))
    {
        $ert=0;
        $wer=1;
        while($row=mysqli_fetch_array($result))
        {
            if($ert==0)
            {
                //$med=display_contents($a,$b,$c,$d);
                $id= array("id","name","email","phone","table","block","unblock","block_users","unblock_users","image");
                $ert=1;
                $ytru=create_new_id("$ert","$id[0]","$id[1]","$id[2]","$id[3]","$id[4]","$id[5]","$id[6]","$id[7]","$id[8]","$id[9]");
                $med1=$ytru;
                //$med2=$med[1];
                $ert=1;
            }
            if($ert==1)
            {
                $wer+=1;
                $a=$row[0];
                $b=$row[1];
                $c=$row[2];
                $d=$row[3];
                $id= $med1;
                $query1="SELECT dashboard1.title, dashboard1.author, dashboard1.price FROM dashboard1 INNER JOIN seller ON dashboard1.isbn=seller.isbn WHERE `seller_id`='$a'";
                
                echo "<div id='user_display'>
                        <div id='$id[9]' style='width:200px;
                        height:200px;
                        border-width:3px;
                        margin-left:5px;
                        margin-top:3px;border-radius:5px;'>
    
                         </div>
                        <div id='user_information'>
                            <p id='$id[0]' style='color:whitesmoke;font-family: Times New Roman, Times, serif;font-weight: bolder;font-size:150%;text-align:center;font-style:italic;'></p>
                            <p id='$id[1]' style='color:whitesmoke;font-family: Times New Roman, Times, serif;font-weight: bolder;font-size:100%;text-align:center;font-style:italic;'></p>
                            <p id='$id[2]' style='color:whitesmoke;font-family: Times New Roman, Times, serif;font-weight: bolder;font-size:100%;text-align:center;font-style:italic;'></p>
                            <p id='$id[3]' style='color:whitesmoke;font-family: Times New Roman, Times, serif;font-weight: bolder;font-size:100%;text-align:center;font-style:italic;'></p>
                        </div>
                        <div id='books_information'>
                            <table id='$id[4]' style='margin-left:520px;margin-top:20px;' border='4'>
                                <tr>
                                    <th style='color:whitesmoke;'>Title Of The Book</th>
                                    <th style='color:whitesmoke;'>Author Of the Book</th>
                                    <th style='color:whitesmoke;'>Price Of the Book</th>
                                </tr>  
                        </div>
                    </div>";

                    $dir="images/";

                    if($result1=mysqli_query($link,$query1))
                    {
                        while($row1=mysqli_fetch_array($result1))
                        {
                            echo "<tr>";
                            echo "<td style='color:whitesmoke;'>".$row1[0].'</td>';
                            echo "<td style='color:whitesmoke;'>".$row1[1].'</td>';
                            echo "<td style='color:whitesmoke;'>".$row1[2].'</td>';
                            echo "</tr>";
                        }
                        echo "</table>";
                    }

                    echo "<form method='post' id='banner'>
                            <input type='submit' name='$id[5]' id='$id[7]' value='Click To block the particular seller' style='width:300px;
                            height:50px;
                            border-style: solid;
                            margin-left:10px;
                            border-radius: 8px;
                            margin-top:30px;'>                    
                    </form>";

                    echo "<form method='post' id='banner'>
                            <input type='submit' name='$id[6]' id='$id[8]' value='Click To Unblock the particular seller' style='width:300px;
                            height:50px;
                            border-style: solid;
                            margin-right:10px;
                            border-radius: 8px;
                            margin-top:-120px;
                            float:right;'>                    
                    </form>";

                    if(array_key_exists("$id[5]",$_POST))
                    {
                        $query2="SELECT `block_status`FROM `user` WHERE `user_id`='$a'";
                        if($result2=mysqli_query($link,$query2))
                        {
                            while($row2=mysqli_fetch_array($result2))
                            {
                                $blocked_variable=$row2[0];
                                echo $blocked_variable;
                                if($blocked_variable==0)
                                {
                                    $change=1;
                                    $query3="UPDATE `user` SET `block_status`= '$change' WHERE `user_id`= '$a'";
                                    mysqli_query($link,$query3);
                                    echo "<script>
                                            document.getElementById('$id[7]').style.width='1300px';
                                            document.getElementById('$id[7]').value='The server has received the request to block...., Refresh to know the status ';
                                            document.getElementById('$id[7]').style.color='green';
                                            document.getElementById('$id[4]').style.visibility='visible';
                                            document.getElementById('$id[8]').style.visibility='hidden';
                                    </script>";
                                }
                                else
                                {
                                    echo "<script>
                                            document.getElementById('$id[8]').style.visibility='visible';
                                            document.getElementById('$id[8]').style.width='1300px';
                                            document.getElementById('$id[8]').value='The user is blocked , Click to unblock';
                                            document.getElementById('$id[8]').style.color='red';
                                            document.getElementById('$id[4]').style.visibility='hidden';
                                            document.getElementById('$id[7]').style.visibility='hidden';
                                    </script>";
                                }
                            }
                        }
                    }

                    if(array_key_exists("$id[6]",$_POST))
                    {
                        $query4="SELECT `block_status`FROM `user` WHERE `user_id`='$a'";
                        if($result4=mysqli_query($link,$query4))
                        {
                            while($row4=mysqli_fetch_array($result4))
                            {
                                $blocked_variable=$row4[0];
                                echo $blocked_variable;
                                if($blocked_variable==1)
                                {
                                    $change1=0;
                                    $query4="UPDATE `user` SET `block_status`= '$change1' WHERE `user_id`= '$a'";
                                    mysqli_query($link,$query4);
                                    echo "<script>
                                        document.getElementById('$id[8]').style.visibility='visible';
                                        document.getElementById('$id[8]').style.width='1300px';
                                        document.getElementById('$id[8]').value='The user is blocked , Click to unblock';
                                        document.getElementById('$id[8]').style.color='red';
                                        document.getElementById('$id[4]').style.visibility='hidden';
                                        document.getElementById('$id[7]').style.visibility='hidden';
                                    </script>";
                                }
                            }
                        }
                    }
                    
                echo "<script>
                    document.getElementById('$id[0]').innerHTML='The Id of the User is'+' '+'$a'+'.';
                    document.getElementById('$id[1]').innerHTML='The name of the user is'+' '+'$b'+'.';
                    document.getElementById('$id[2]').innerHTML='E-Mail Address of the user is'+' '+'$c'+'.';
                    document.getElementById('$id[3]').innerHTML='Phone number of the user residence'+' '+'$d'+'.';
                    
                </script>";
                $med1=create_new_id($wer , $id[0] , $id[1], $id[2] , $id[3] , $id[4], $id[5] , $id[6], $id[7], $id[8], $id[9]);
        }
        echo "<hr>";
        echo "<br>";echo "<br>";
        
    }
}
?>