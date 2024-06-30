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

// search index alter 
<?php
     $array_room_number = explode(" ",fgets(STDIN));
    //入力からもらった数値分反復する
    $array = [];
    for($i = 0 ; $i < intval($array_room_number[0]); $i ++){
           $array[] = intval(trim(fgets(STDIN)));  
    }
    
    $ans = -1;
     //配列の中に指定の数値がないか検索
     
     foreach ($array as $key => $value)
     {
         // echo $key+1; 
         if($value == $array_room_number[1]){
           $ans = $key+1;
           break; 
         }
     }
     
    echo $ans;
?>
