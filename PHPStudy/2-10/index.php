<?php
function volume ($vertical, $width, $height){
  return ($vertical * $width * $height)."㎤";
}
echo volume(5, 10, 8);
?>
<!-- 
1. ハッシュ化：ルールに基づき、別の値に置き換えること
2. 総合テスト：システム全体で予定通りの機能か、仕様書通りの構築かを検証する
3. デバッグ：コンピュータのプログラムの誤り（＝バグ）を見つけ、手直しをすること。
 -->