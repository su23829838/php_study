<?php
    $array_room_number = explode(" ",fgets(STDIN));
    //入力からもらった数値分反復する
    $array = [];
    for($i = 0 ; $i < intval($array_room_number[0]); $i ++){
           $array[] = intval(trim(fgets(STDIN)));  
    }
    
    //print_r($array_room_number);
    $ans = "No";
     //配列の中に指定の数値がないか検索
     if (in_array(intval($array_room_number[1]), $array)) {
     $ans = "Yes";
     }
    echo $ans;
?>
