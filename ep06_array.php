<?php

    // $array_1 = array(1,2,3,7,8,9,6,5,4);
    // $array_2 = array("a" => "1", "b" => "30");
    // echo "<pre>";
    
    // echo "array_1 : ";
    // print_r( $array_1);
    // echo "array_2 : ";
    // print_r( $array_2);

    // foreach($array_1 as $key => $val){
    //     echo "key : ".$key;
    //     echo "val : ".$val;
    //     echo "<br>";
    // }
    $array_3 = array(20,12,33,7,48,19,26,65,74);
    $arrayCount = count($array_3);
    
    for($i = 0; $i < $arrayCount -1;$i++){
       $min = $i;
       for($j= $i + 1; $j < $arrayCount;$j++){
        if($array_3[$j] < $array_3[$min]){
            $min = $j;
        }
       }

       if($min != $i){
        $temp = $array_3[$i];
        $array_3[$i] = $array_3[$min];
        $array_3[$min] = $temp;
       }
    }

    print_r($array_3);

    


?>