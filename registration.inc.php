<?php

if (isset($_POST["submit"])){
    echo "funguje to";

    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pass"];
    $pwdRepeat = $_POST["repass"];

    require_once 'connection.php';
    require_once 'functions.php';

    if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
        header("location: ../web_rocnikovy/registration.php?error=input");
        exit();
    }
    if(invalidUid($username) !== false){
        header("location: ../registration.php?error=nespravnemeno");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../registration.php?error=nesprávnyemail");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../registration.php?error=heslosanezhoduje");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false){
        header("location: ../registration.php?error=menojeuzzabrate");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}

else {
    header("location: ../registration.php"); 
}
