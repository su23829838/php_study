<?php
$item = array("02:戦士", "01:勇者", "04:魔法使い", "03:僧侶");
// 小さい順に並び替えて、print_rで出力してみましょう。
sort($item);
// rsort($item);
print_r($item);

// -------------------------
while($item =fgets(STDIN) )
{
    $array[] = trim($item);  
}
 sort($array);
 print_r($array);

// ------------------------- 
// csv のとかの読み込み時に使いそうなやつ
 $item = explode(",", fgets(STDIN));
 sort($item);
 print_r($item);

 // -------------------------  for each
 $item_img = array(
    "剣" => "http://paiza.jp/learning/images/sword.png",
    "盾" => "http://paiza.jp/learning/images/shield.png",
    "回復薬" => "http://paiza.jp/learning/images/potion.png",
    "クリスタル" => "http://paiza.jp/learning/images/crystal.png"
);

$item_order = array("クリスタル", "盾", "剣", "回復薬");
//並び順配列をループさせてアイテム名を表示
    
    foreach($item_order as $item_name){
        echo "<img src=".$item_img[$item_name].">";
        echo $item_name."<br>\n";
    } 

 // -------------------------  for each key を使用する場合
$array = array("勇者", "魔法使い", "遊び人");
    foreach($array as  $key =>  $value){
        echo $key. "<strong>".$value."</strong><br>\n";
    }


?>
