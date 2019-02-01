<?php 

    $cookie_name="Shraddha";
    $cookie_value="jr web developer";

    setcookie($cookie_name, $cookie_value, time()+ (8400 *30), "/");

    if(!isset($_COOKIE[$cookie_name]))
    {
        echo "the cookie ".$cookie_name." is not set";
    }
    else
    {
        echo "the cookie name <b>".$cookie_name."</b> is set<br>";
        echo "And its value is <b>$_COOKIE[$cookie_name]</b><br>";
    }

    if(count($_COOKIE)>0)
    {
        echo "the cookie is enabled";
    }
    else
    {
        echo "the cookie is disabled";
    }

    session_unset();
?>