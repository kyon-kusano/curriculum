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
