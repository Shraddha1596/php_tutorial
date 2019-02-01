<?php

    session_start();

    $_SESSION['number1'];
    $_SESSION['number2'];

    echo "the session numbers are ".$_SESSION['number1']. " and ". $_SESSION['number2']. "<br>";

    echo "And their product is ".$_SESSION['number1'] * $_SESSION['number2']."<br>";

    print_r($_SESSION);
?>