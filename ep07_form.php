<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ep07_process.php" method="POST" name="form_1">
        <table style="margin: 0 auto;width:350px;">
            <tr>
                <td style="text-align: right;">Username</td>
                <td><input type="text" name="username" id="username" /></td>
            </tr>
            <tr>
                <td style="text-align: right;">Password</td>
                <td><input type="password" name="password" id="password" /></td>
            </tr>
            <tr>
                <td style="text-align: right;">Confirm password</td>
                <td> <input type="password" name="confirm_password" id="confirm_password" /></td>
            </tr>
            <tr>
                <td style="text-align: right;">Firstname</td>
                <td><input type="text" name="f_name" id="f_name" /></td>
            </tr>
            <tr>
                <td style="text-align: right;">Lastname</td>
                <td> <input type="text" name="l_name" id="l_name" /></td>
            </tr>
            <tr>
                <td style="text-align: right;">Phone</td>
                <td> <input type="tel" name="phone" id="phone" /></td>
            </tr>
            <tr>
                <td style="text-align: right;">Email</td>
                <td><input type="text" name="email" id="email" /></td>
            </tr>
            <tr>
                <td style="text-align: right;">ID</td>
                <td> <input type="text" name="user_id" id="user_id" /></td>
            </tr>

            <tr>
                <td></td>
                <td> <input type="submit" name="submit" id="submit" value="submit" /></td>
            </tr>
        </table>

    </form>


</body>

</html>