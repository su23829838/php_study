------------------------------------
<?php
  $station_map  = explode(" ", fgets(STDIN));

echo  $station_map[0] ."\n";

 $station_array[] = 1;
for($i= 0; $i < $station_map[0]; $i++)
{
  $station_array[] =  explode(" ", fgets(STDIN));
}

//print_r($station_array);

$kaisu = fgets(STDIN);
echo $kaisu . "\n";

$result = 0;
$current_location = array(1,0);
print_r($current_location); 

for($j=0; $j< intval($kaisu) ; $j++){
    
    //入力値を取得
    $input = explode(" ", fgets(STDIN));
    //入力値の前後を取得
    $cr_front = intval($input[0]);
    $cr_after = intval($input[1])-1;
    
    //駅の横軸を取得
    $current_location[0] = $cr_front;
    
    //駅運賃の入った配列の部屋番号の値を取得
    $station_front = intval($current_location[0]);
    $station_back = intval($current_location[1]);
  
    // echo $current_location[0];
    
    //駅から駅へ
     $bfore =  $station_array[$station_front][$station_back];
     $after =  $station_array[$cr_front][$cr_after];
     
    $result += abs(intval($bfore) - intval($after));
    echo $result;
    $current_location[1] = $cr_after;
    //print_r($current_location); 
}
?>
