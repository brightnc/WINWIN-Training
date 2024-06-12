<?php
    $input_username  = $_POST["username"];// a-z,0-9
    $input_password = $_POST["password"];
    $input_confirm_password = $_POST["confirm_password"];
    $input_f_name = $_POST["f_name"];
    $input_l_name = $_POST["l_name"];
    $input_phone = $_POST["phone"];//0-9
    $input_email = $_POST["email"];
    $input_user_id = $_POST["user_id"];
    $input_submit = $_POST["submit"];
    // echo "<pre>";
    // print_r($_POST);

    $username_regex = "/^[a-zA-Z0-9]{4,12}$/";
    $password_regex = "/[a-zA-Z0-9]{6}/";
    $character_regex = "/^[a-zA-Z]+$/";
    $number_regex = "/^[0-9]+$/";
    $email_regex = "/^[a-zA-Z0-9]+@/";
    $user_id_regex = "/^[0-9]{13}$/";



    if(!preg_match($username_regex,$input_username)){
        echo "username : ".$input_username;
        echo "<br>";
        echo "wrong username format";
        exit;
    }

    if(!preg_match($password_regex,$input_password) || !preg_match($password_regex,$input_confirm_password) ){
        echo "password : ".$input_password;
        echo "<br>";
        echo "c_password : ".$input_confirm_password;
        echo "<br>";
        echo "wrong password format";
        exit;
    }

    if(!preg_match($character_regex,$input_f_name) || !preg_match($character_regex,$input_l_name) ){
        echo "f_name : ".$input_f_name;
        echo "<br>";
        echo "l_name : ".$input_l_name;
        echo "<br>";
        echo "wrong name format";
        exit;
    }

    if(!preg_match($number_regex,$input_phone)){
        echo "phone : ".$input_phone;
        echo "<br>";
        echo "wrong phone number format";
        exit;
    }

    if(!preg_match($email_regex,$input_email)){
        echo "email : ".$input_email;
        echo "<br>";
        echo "wrong email format";
        exit;
    }

    if(!preg_match($user_id_regex,$input_user_id)){
        echo "user_id : ".$input_user_id;
        echo "<br>";
        echo "wrong user id format";
        exit;
    }

    if(strcmp($input_password ,$input_confirm_password) != 0 ){
        echo $input_password ;
        echo "<br>";
        echo var_dump($input_password );
        echo "<br>";
        echo $input_confirm_password ;
        echo "<br>";
        echo "password not match";
        exit;
    }

    // echo "success";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>process</title>
    <style>
        table, tr,td,th{
            border:1px solid black;
        }
    </style>
</head>
<body>
<table action="clear_session.php" method="POST" name="user_info" style="margin: 0 auto;width:350px;">
        <tr>
            <th style="text-align: center;">Label</th>
            <th style="text-align: center;">Input Data</th>
        </tr>
        <tr>
            <td style="text-align: right;">Username</td>
            <td><?php echo $input_username;?></td>
        </tr>  
        <tr>
            <td style="text-align: right;">Firstname</td>
            <td><?php echo $input_f_name;?></td>
        </tr>
        <tr>
            <td style="text-align: right;">Lastname</td>
            <td> <?php echo $input_l_name;?></td>
        </tr>
        <tr>
            <td style="text-align: right;">Phone</td>
            <td><?php echo $input_phone;?></td>
        </tr>
        <tr>
            <td style="text-align: right;">Email</td>
            <td><?php echo $input_email;?></td>
        </tr>
        <tr>
            <td style="text-align: right;">ID</td>
            <td> <?php echo $input_user_id;?></td>
        </tr>

        <tr>
            <td ></td>
            <td><input type="submit" value="clear_session"></td>
        </tr>
    </table>
</body>
</html>

