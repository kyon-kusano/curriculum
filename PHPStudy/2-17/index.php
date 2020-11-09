<?php
$sum = 0;
$num = 1;
while($sum < 40){
  $rand = mt_rand(1, 6);
  echo $num."回目＝".$rand.'<br>';
  $sum += $rand;
  $num++;
}
echo "合計".$num."回でゴールしました。";
echo '<br><br>';
?>


<?php
date_default_timezone_set('Asia/Tokyo');
$time_s = date("H", time());
$time = intval($time_s);
echo "今".$time."時間台です<br>";
if(4 <= $time && $time <= 11){
  echo "おはようございます";
}elseif(12 <= $time && $time<= 18){
  echo "こんにちは";
}else{
  echo "こんばんは";
}
?>

<!-- 

 -->
