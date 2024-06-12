<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    Hello HTML
    <br>
    Input_1 : <input type="text" name="input1" id="input1"/>
    <br>
    Input_2 : <input type="text" name="input2" id="input2"/>
    <br>
    <button type="button" name="submit" id="submit" onclick="handleSubmit()">submit</button>
    <div id="out_put">
        Waiting result...
    </div>
    <?php
        echo "<br/>";
        echo "Hello PHP";
    ?>
    <script>
        function handleSubmit() {
            const input_1 = document.getElementById("input1").value;
            const input_2 = document.getElementById("input2").value;
            const result = Number(input_1) + Number(input_2)
            // document.getElementById("out_put").innerHTML = "Result is : " + result;
            document.getElementById("out_put").innerHTML =  `Result is : ${result}`;
        }
    </script>
</body>
</html>