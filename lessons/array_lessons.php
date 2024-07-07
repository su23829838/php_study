// revese array
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $counter = intval(fgets(STDIN));
    $array = [];
    for($i = 0 ; $i < $counter; $i++){
      $array []=  intval(fgets(STDIN));
    }
    
    $array_R = array_reverse($array);
    
    foreach ($array_R as  $item){
                 print($item)."\n";
    }
?>


//swap array
<?php
// 5
// 1
// 2
// 3
// 4
// 5
// 3 5
    $count = fgets(STDIN);
    
    $array = array("start");
    
    for($i = 0;$i < $count; $i++){
        $array[] = trim(fgets(STDIN));
    }
    
    $target = explode(" ",fgets(STDIN));
    
    $target_1= $target[0]; 
    $target_2= $target[1]; 
    
    $temp = $array[$target_1];
    $array[$target_2] =  $array[$target_1];
    $array[$target_1] = $temp;
    
    foreach($array as $key => $value){
       
        if($key > 1){
            echo $value ."\n";
        }
    }
    
?>
