<?php
    // echo "<pre>";
    // print_r($_GET);
    // echo "<hr>";
    // var_dump($_GET);
    // exit;
    $input_1 = 0;
    $input_2 = 0;

    if(isset($_GET["submit"]) && $_GET["submit"] != ""){
        if($_GET["input_1"]  == "" || $_GET["input_2"] == ""){
            echo "Missing input value.";
            exit;
        }

        if(is_numeric($_GET["input_1"]) != true || is_numeric($_GET["input_2"]) != true  ){
            echo "Input is not a number.";
            exit;
        }
        $input_1 = $_GET["input_1"];
        $input_2 = $_GET["input_2"];
        echo "result : ".($input_1 + $input_2);
    }else{
        echo "Can't get result";
    }

?>