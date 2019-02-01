<?php
    
    function customErr($errNo, $errStr)
    {
        echo "Error: [$errNo] $errStr <br>";
        echo "Ending Script <br>";
        // echo "Webmaster has been notified";
        // error_log( "Error: [$errNo] $errStr",1,"shraddha@excellencetechnologies.in");
        die();
    }
    set_error_handler("customErr", E_USER_WARNING);

    // echo $name;
    
    $test=2;

    if($test>=1)
    {
        trigger_error("value of test can only be smaller or equal to 1", E_USER_WARNING);
    }

  

?>