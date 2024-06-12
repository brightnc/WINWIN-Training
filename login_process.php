<?php
include_once("session_include.php");

$arrayUserInfo = array("username" => "user01","password" => "abc1234");


echo "processing...";

if(isset($_POST["login"]) && $_POST["login"] != ""){
    if($_POST["username"]  == ""|| $_POST["password"] == "" ){
        echo "Missing input value.";
        exit;
    }
    $input_username  = $_POST["username"];
    $input_password = $_POST["password"];

    echo "<pre>";
    echo "username : ".$input_username;
    echo "<br>";
    echo "password : ".$input_password;
    echo "<br>";

    if($input_username == $arrayUserInfo["username"] && $input_password == $arrayUserInfo["password"] ){
        $_SESSION["username"] = $arrayUserInfo["username"];
        $_SESSION["password"] = $arrayUserInfo["password"];
        $login_status = 1;
        $_SESSION["login_status"] = $login_status;
        echo "<hr>";
        echo "Session variables are set.";
        echo "<hr>";
        print_r($_SESSION);
        header("Location: login_success.php");
        exit;
    }

    

    echo "wrong username or password!";
}else{
    echo "Can't get result";
}
?>