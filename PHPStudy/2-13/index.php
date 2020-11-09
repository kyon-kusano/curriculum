ceil（切り上げ）<br>
例題：1.5を切上げ<br>
<?php
    // index.php
    $x = 1.5;
    echo "回答：".ceil($x);
?><br><br>

floor（切り捨て）<br>
例題：1.5を切り捨て<br>
<?php
    // index.php
    $x = 1.5;
    echo "回答：".floor($x);
?><br><br>

round（四捨五入）<br>
例題：1.5を四捨五入<br>
<?php
    $x = 1.5;
    echo "回答：".round($x);
?><br><br>

pi（円周率）<br>
例題：半径が3mの円の面積（小数点切捨て）<br>
<?php
  function circleArea($r) {
      $circle_area = $r * $r * pi();
      echo "回答：".floor($circle_area)."㎡"; 
  }
  circleArea(3);
?><br><br>

mt_rand（乱数）<br>
例題：99〜150までの乱数<br>
<?php
echo "回答：".mt_rand(99, 150);
?><br><br>

strlen（文字列の長さ）<br>
例題：kusanoという文字列の長さ<br>
<?php
    $str = "kusano";
    echo "回答：".strlen($str);
?><br><br>

strpos（検索）<br>
例題：kusanoという文字内にaという文字は何番目に存在するか（インデックスの番号で回答）<br>
<?php
    $str = "kusano";
    echo "回答：".strpos($str, "a");
?><br><br>

substr（文字列の切り取り）<br>
例題：kusanoという文字の後ろから２文字を抜き出し<br>
<?php
    $str = "kusano";
    echo "回答：".substr($str, -2, 2);
?><br><br>

str_replace（置換）<br>
例題：kusanoという文字の後ろから２文字を大文字表記に置き換え<br>
<?php
    $str = "kusano";
    echo "回答：".str_replace("no", "NO", $str);
?><br><br>

printf（フォーマット化した文字列を出力）<br>
例題：自分がいつ入社なのか<br>
<?php
    $name = "草野";
    $month = 9;
    $date = 16;
    printf("回答：%sは%02d月%02d日にmeetupを行いました。", $name, $month, $date);
?><br><br>

sprintf（変数に代入できるprintf）<br>
例題：自分がいつ入社なのか<br>
<?php
    $name = "草野";
    $month = 9;
    $date = 16;
    $join = sprintf("回答：%sは%02d月%02d日にmeetupを行いました。", $name, $month, $date);
    echo $join;
?>

<!-- 
1. PostgreSQL：オープンソースなリレーショナルデータベース管理システム。全てのソースが公開されているため、用途を問わず無料で使用できる
   OracleSQL：オラクル社が開発したリレーショナルデータベース管理システムで使用されるSQL言語
2. TortoiseGit：GitのクライアントツールでWindowsのシェルエクステンションとして機能する
   TortoiseSVN：集中型バージョン管理システム「Subversion(SVN)」のWindows用GUIソフト
3. 外部設計：インターフェースをはじめ、ユーザーから見えるところを主に設計する
   内部設計：システム内部の詳細な設計
 -->

