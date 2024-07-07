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

    for($i = 0;$i < $count; $i++){
        $array[] = trim(fgets(STDIN));
    }
    
   // print_r($array);
    
    $target = explode(" ",fgets(STDIN));
    //print_r($target);
    
    $target_1= intval($target[0])-1; 
    $target_2= intval($target[1])-1; 
    
    $temp = $array[$target_1];
    $array[$target_1] =  $array[$target_2];
    $array[$target_2] = $temp;
    
    foreach($array as $key => $value){
            echo $value ."\n";
    }
    
?>

//array push
<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $count = fgets(STDIN);
    $array = [];
    for($i = 0; $i < $count; $i++)
    {
        $array[] = fgets(STDIN);
    }
    
    //1
    //1
    //2
   array_push($array, intval(fgets(STDIN)));
    
    foreach($array as $item){
        echo $item;
    }
    
?>

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

// swap variable
<?php
    $numbers = explode(" ", trim(fgets(STDIN)));
    $a = $numbers[1];
    $b = $numbers[0];
    echo $a ." " .$b;
?>
