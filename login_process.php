<?php
include_once("session_include.php");

$servername = "localhost";
$username = "brightdev";
$password = "43349690";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST["login"]) && $_POST["login"] != "") {
    if ($_POST["username"]  == "" || $_POST["password"] == "") {
        echo "Missing input value.";
        exit;
    }
    $input_username  =  $conn->real_escape_string($_POST["username"]);
    $input_password = $conn->real_escape_string($_POST["password"]);
    $hashed_input_password = md5($input_password);

    echo "<pre>";
    echo "input username : " . $input_username;
    echo "<br>";
    echo "input password : " . $input_password;
    echo "<br>";
    echo "<br>";

    $sql = "SELECT username, password FROM user_info WHERE username = '{$input_username}' AND password = '{$hashed_input_password}'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $username = $row["username"];
            $password = $row["password"];
            echo "----------------------------";
            echo "<br>";
            echo $username . " logged in";
            echo "<br>";
            echo "----------------------------";
        }
    } else {
        echo "----------------------------";
        echo "<br>";
        echo "wrong username or password !!";
        echo "<br>";
        echo "----------------------------";
    }
    $conn->close();
    exit;
} else {
    echo "Can't get result";
}
