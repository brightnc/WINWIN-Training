<?php
include_once("session_include.php");
if(isset($_SESSION["login_status"])){
    header("Location: login_success.php");
    exit;
}
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="login_process.php" method="POST" name="form_1">
    <table style="margin: 0 auto;">
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td ></td>
            <td> <input type="submit" name="login" id="login" value="login"/></td>
        </tr>
    </table>
</form>
</body>
</html>