<?php
    $array_room_number = intval(fgets(STDIN));
    //入力からもらった数値分反復する
    for($i = 0 ; $i < $array_room_number; $i ++){
           $array[] = trim(fgets(STDIN));  
    }
    //配列の合計を計算
    echo   array_sum($array);
?>

//array add
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
 $count = fgets(STDIN);
  $array = [];
  for($i=0; $i < $count; $i++)
  {
      $array [] = intval(fgets(STDIN));   
  }
  
   //print_r($array); 
  $target = explode(" ",fgets(STDIN));
 
 //print_r($target);
  $t1= $target[0];
  $t2= $target[1];
  
 //$array[$t1] = $t2;
 array_splice($array,  $t1, 0, $t2); 
   
   foreach($array as $item){
      echo $item . "\n";
   }

?>

//splice array element
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = fgets(STDIN);
    $array = [];
    for($i = 0;$i < $input_line ; $i++){
     $array[] = intval(fgets(STDIN));    
    }
    
    $t1 = intval(fgets(STDIN)) ;
    
    array_splice($array , $t1-1, 1);
    
    foreach($array as $item){
        echo $item . "\n";
    }
    
?>
