<?php
for($i = 1; $i <= 100; $i++){
  if($i % 3 == 0 && $i % 5 == 0){
    echo "FizzBuzz!!"; 
    echo '<br>';
  }elseif($i % 5 == 0){
    echo "Buzz!";
    echo '<br>';
  }elseif($i % 3 == 0){
    echo "Fizz!";
    echo '<br>';
  }else{
    echo $i;
    echo '<br>';
  }
}
?>
<!-- 
1. パフォーマンス：コンピュータやソフトウェアなどの処理性能、実行速度、伝送速度、容量などの性能
2. スロークエリ：時間のかかっているSQL
3. クエリログ：実行したSQLクエリの履歴が記録されるログ
 -->

