<?php
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
        
        $result = 0;
        $start_time = strtotime("now");
        echo $start_time ;
        echo "<br>";
        // for($i = 1; $i <= $input_1; $i++){
        //     $result += $i;
        // }

        $result = $input_1/2 * (2+($input_1 - 1) * 1);
        $end_time = strtotime("now");
        echo $end_time ;
        echo "<br>";
        echo $end_time - $start_time."Sec.";
        echo "<br>";
        echo "result : ".$result;
    }else{
        echo "Can't get result";
    }
?>