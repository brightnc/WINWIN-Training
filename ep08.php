<?php

    function fact($n){
        echo "n = ".$n;
        if($n == 0){
            return 1;
        }

        $sum = $n * fact($n - 1);
        echo "sum = ".$sum;

        return $sum;

    }

    $result = fact(5);
    echo "<br>";
    echo "result : ".$result;


    // function fibo($n,$pos1=0,$pos2=1){
    //     if($n == 0){
    //         return;
    //     }

    //     echo $pos1.",";
    //     $next = $pos1 + $pos2;
        
    //     fibo($n-1,$pos2,$next);
    // }

    // fibo(7);


?>