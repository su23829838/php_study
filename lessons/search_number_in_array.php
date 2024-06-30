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
// count unique element 
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = explode(" ",fgets(STDIN));
   $array = [] ;
   for($i = 0 ; $i < intval($input_line[0]); $i++){
       $array[] = intval(fgets(STDIN));
   }
    
    $unique_array = array_unique($array);
    echo count($unique_array);
?>


//----- add value in thirough the foreach
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = explode(" ",fgets(STDIN));
    
    $array=[];
    for($i=0; $i < intval($input_line[0]); $i++){
       $array[] = intval(fgets(STDIN));
    }

    foreach($array as $item){
       // echo $item;
        echo $item + intval($input_line[1])."\n";
    }
?>
// ------------------- map replace
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $line = explode(" ",fgets(STDIN));
    $array = [];
    for($i= 0 ; $i < intval($line[0]); $i++){
        $array[] = fgets(STDIN);
    }
    
    $target = explode(" ",fgets(STDIN)); 
   
    foreach($array as $key => $value){
   
      if($key == intval($target[0])){
        
        $replacement = ".";
        if(substr($value, intval($target[1]), 1)){
          $replacement = "#";
        }
        
        echo substr_replace($value, $replacement, intval($target[1]), 1);
      } else{
          echo $value;
      }
      //  echo "\n";
    } 

?>
