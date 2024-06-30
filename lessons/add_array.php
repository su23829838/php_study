<?php
    $array_room_number = intval(fgets(STDIN));
    //入力からもらった数値分反復する
    for($i = 0 ; $i < $array_room_number; $i ++){
           $array[] = trim(fgets(STDIN));  
    }
    //配列の合計を計算
    echo   array_sum($array);
?>
