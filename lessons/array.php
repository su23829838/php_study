<?php
// 小吉
// 大吉
// 狂
// 中吉

// 値が空でなければループして値を取得し続ける
while($input = fgets(STDIN) ){
    $array[] = $input;
}
print_r($array);
$max = count($array);
$key = rand(0,$max);
echo $array[$key];

?>
