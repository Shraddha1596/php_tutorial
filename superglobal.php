<?php 

    echo "<h4>---Super Global Variable---</h4>";

    $x=10;
    $y=20;

    function mul()
    {
        $GLOBALS['z']= $GLOBALS['x'] * $GLOBALS['y'];
    }
    mul();
    echo $z;

    echo "<h4>---PHP SERVER---</h4>";
    echo "PHP_SELF:  ",$_SERVER['PHP_SELF'];
    echo "<br>";

    echo "SERVER_NAME:  ",$_SERVER['SERVER_NAME'];
    echo "<br>";

    echo "HTTP_POST:  ",$_SERVER['HTTP_HOST'];
    echo "<br>";

    // echo "REMOTE_ADDR:  ",$_SERVER['REMOTE_ADDR'];
    // echo "<br>";

    echo "HTTP_USER_AGENT:  ",$_SERVER['HTTP_USER_AGENT'];
    echo "<br>";

    echo "SCRIPT_NAME:  ",$_SERVER['SCRIPT_NAME'];
    echo "<br>";

    // echo "SCRIPT_URI:  ",$_SERVER['SCRIPT_URI'];
    // echo "<br>";
?>