<?php
    // echo "<pre>";
    // print_r($_POST);
    // echo "<hr>";
    // var_dump($_POST);
    // exit;
    $input_1 = 0;

    if(isset($_POST["submit"]) && $_POST["submit"] != ""){
        if($_POST["input_1"]  == "" ){
            echo "Missing input value.";
            exit;
        }

        $input_1 = $_POST["input_1"];

        if(is_numeric($input_1) != true ){
            echo "Input is not a number.";
            exit;
        }

        if($input_1  == 0 ){
            echo "Number must be greater than 0.";
            exit;
        }
        
        $star = "";

        for($x = 0; $x < $input_1; $x++)  {
            $star = $star . "*";
            echo $star;
            echo "<br>";
        }
        for($x = $input_1 - 1; $x >= 0; $x--)  {
            $star[$x] = " ";
            echo $star;
            echo "<br>";
        }
    }else{
        echo "Can't get result";
    }

?>