<?php
$servername = "localhost";
$username = "brightdev";
$password = "43349690";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * FROM user_info WHERE STATUS = 1";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     echo "<pre>";
//     // output data of each row
//     while ($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"] . " - Name: " . $row["fname"] . " " . $row["lname"] . "<br>";
//     }

//     // echo "<pre>";
//     // print_r($result->fetch_assoc());
//     // echo "<br>";
//     // print_r($result->fetch_array());
// } else {
//     echo "0 results";
// }

$sql = "INSERT INTO user_info(`username`, `password`, `fname`, `lname`, `email`, `id_card`, `phone_number`) VALUES ('testuser03', 'faf4fsf48sd', 'testuser', 'testuser', 'test@3.com', '1111111111115', '0929847529')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
