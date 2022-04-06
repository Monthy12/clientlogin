<?php
require_once 'database_connection.php';

if(isset($_POST['submit'])) {
    
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $firstName = mysqli_real_escape_string($con, $_POST['first_name']);
    $lastName = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($con, $_POST['confirm_password']);


    
    require_once 'functions.inc.php';

    if (emptyInputSignup($username, $firstName, $lastName, $email, $password, $confirmPassword) !== false){
        header("Location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false){
        header("Location: ../signup.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false){
        header("Location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($password, $confirmPassword) !== false){
        header("Location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    if (uidExists($con, $username, $email) !== false){
        header("Location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($con, $username, $firstName, $lastName, $email, $password);

}
else{
    header("Location: ../signup.php");
    exit();
}