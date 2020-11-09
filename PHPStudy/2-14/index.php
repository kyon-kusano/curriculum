count（要素の数を数える）<br>
<?php
$members = ["k", "u", "s", "a", "n","o"];
echo count($members);
?><br><br>

sort（要素の並べ替え）<br>
<?php
$members = [5, 4, 3, 2, 1];
sort($members);
var_dump($members);
?><br><br>

in_array（配列に中にある要素が存在しているか）<br>
<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
if (in_array("kusano", $members)) {
    echo "草野さんがいるよ！";
} else {
    echo "草野さんはいないよ！";
}
?><br><br>

implode（配列を結合して文字列に変換）<br>
<?php
$members = ["k", "u", "s", "a", "n","o"];
$atstr = implode($members);
var_dump($atstr);
?><br><br>

explode（文字列を指定の区切りで配列にする）<br>
<?php
$members = ["k", "u", "s", "a", "n","o"];
$atstr = implode("@", $members);
var_dump($atstr);
echo '<br>';
$re_members = explode("@", $atstr);
var_dump($re_members);
?><br><br>

<!-- 
1. 要件定義(要求仕様書)：ユーザー要求をシステム要件へ変換していくこと。

2. 単体テスト：手続きや関数といった個々の機能ごとに動作確認。
   結合テスト：システム全体で予定通りの機能か、仕様書通りの構築かを検証する

3. テスト仕様書(どのようなもの、項目)：要件定義書の通りに機能するかどうか、テストするポイントをまとめたドキュメント
 -->
