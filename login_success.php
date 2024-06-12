<?php
include_once("session_include.php");

if($_SESSION["username"] == "" || $_SESSION["password"] == ""){
    header("Location: login.php");
    exit;
}
$username = $_SESSION["username"];

$password = $_SESSION["password"];

$session_id = session_id();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form  action="clear_session.php" method="POST">
        <table style="margin: 0 auto;width:350px;">
            <tr>
                <td style="text-align: right;">Username</td>
                <td><?php echo  $username; ?></td>
            </tr>
            <tr>
                <td style="text-align: right;">Password</td>
                <td><?php echo  $password; ?></td>
            </tr>
            <tr>
                <td style="text-align: right;">SESSION ID</td>
                <td><?php echo  $session_id; ?></td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" name="clear_session" id="clear_session" value="log out" /></td>
            </tr>
        </table>
    </form>
</body>

</html>