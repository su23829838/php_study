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

// 普通に九九
<?php

    for($i = 1; $i < 10 ; $i++){
        for($j = 1; $j < 10 ; $j++){
          
          if($j == 9){
            echo ($i * $j) ."\n" ;
          }else{
            echo ($i * $j) ." " ;
          }
        }
    }
?>

// php 自分より低い要素に値をかけていく
<?php
// 入力を取得する
$count = intval(fgets(STDIN));
$array = [];
for ($i = 0; $i < $count; $i++) {
    $array[] = intval(fgets(STDIN));
}

// 計算と出力
for ($i = 1; $i < $count; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo $array[$i] * $array[$j] . "\n";
    }
}
?>

//配列の要素数の確認
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_line = explode(" ",fgets(STDIN));
    
    $array =[];
    
    $count = intval($input_line[1]);
    $loop_normal = intval($input_line[0]);
    
    for($i =0; $i < $count; $i++){
        
        if($loop_normal > $i){
            $array[] = trim(fgets(STDIN)); 
        }else{
            $array[]= 0;
        }
    }
    
    foreach($array as $item){
        echo $item . "\n";
    }
?>

//array 重複排除
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $count = intval(fgets(STDIN));
    
    $array =[];
    
    for($i =0; $i < $count; $i++){
      $array[]= trim(fgets(STDIN));
    }
    
    $result = array_unique($array);
    
    foreach($result as $item){
        echo $item . "\n"; 
    }

?>


//傾斜配点 
→　ここに空白や文字があったらphp　だと表示されてしまう。
<?php

    $count = intval(trim(fgets(STDIN)));
    $gr = explode(" " , trim(fgets(STDIN)));
    
    $array =[];
    for($i =0; $i < $count; $i++){
      $array[]= explode(" " , trim(fgets(STDIN)));
    }

     $result = 0;
     
     foreach($array as $item){
       $ar = array_map('intval', $item);
       $re = 0; 
        
       for($i = 0; $i < 5; $i++){
         $re +=  $ar[$i] * $gr[$i]; 
       }
       
       if($result < $re){
          $result = $re;
       }
     }
    echo trim($result) ."\n";
   // echo trim($result) ;
?>


//配列活用について
<?php

  //5 3974 0
  //2049
  //4690
  //6867
  //3414
  //460
  
    $seed = explode(" " , trim(fgets(STDIN)));
    
    $count = intval($seed[0]);
   
    $array =[];
    for($i =0; $i < $count; $i++){
         $res =  intval(fgets(STDIN));
         if($res > intval($seed[1]) ){
            $array[] =  $res;
         }
    }
    
    $result = count($array);
    $result = $result - intval($seed[2]) > 0 ?  $result - intval($seed[2]) : 0;
    
    echo $result;
  
?>

