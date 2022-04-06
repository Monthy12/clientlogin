<?php

if (isset($_POST["submit"])) {

    $username = $_POST["username_email"];
    $passowrd = $_POST["password"];
    

    require_once 'database_connection.php';
    require_once 'functions.inc.php';


    if (emptyInputLogin($username, $passowrd) !== false){
        header("Location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($con, $username, $passowrd);
    
}
else {
    // header("Location: ../login.php");
    // exit();
}