<?php
    if(isset($_POST['logout']))
    {  
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        unset($_SESSION["sessionid"]);
        $p=session_regenerate_id();
        $_SESSION["sessionid"]="$p";

        echo $_SESSION["sessionid"];
        unset($_COOKIE["$cookie_name"]);
        unset($_COOKIE["$cookie_name1"]);
        echo " the session is destroyed";

        header('Location: administartor_first_page.php');
        exit;
    }
 ?>