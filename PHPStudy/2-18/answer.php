<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style3.css">
</head>
<body>
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['name'];
$port = $_POST['port'];
$language = $_POST['language'];
$mysql = $_POST['mysql'];
$ture1 = $_POST['ture1'];
$ture2 = $_POST['ture2'];
$ture3 = $_POST['ture3'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function check($answer, $ture){
  if($answer == $ture){
    echo "<p>正解！</p>";
  }else{
    echo "<p>残念・・・</p>";
  }
}

?>
<p><?php echo $name ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo check($port, $ture1); ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo check($language, $ture2); ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php echo check($mysql, $ture3); ?>
</body>
</html>

