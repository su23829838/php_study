<?php
    $counter = explode(" " ,fgets(STDIN));

    $array = [];
    for($i = 0; $i < intval($counter[0]); $i++){
        $array[] = str_split(fgets(STDIN),1);
    }
    
   // print_r($array);
    $target = explode(" " ,fgets(STDIN));
    $row = intval($target[0]);
    $column = intval($target[1]);
    
    // echo $row ;
    // echo $column ;
    // echo "eeeeeeeee" .$array[$row][$column]."eeeeeeeee";
    
    if($array[$row][$column] == "#" ){
        $array[$row][$column] = ".";
    }else{
         $array[$row][$column] = "#";
    }

    foreach($array as $ar){
      foreach($ar as $item){
       echo $item ; 
      }
    }
    
?>
