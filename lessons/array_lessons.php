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
