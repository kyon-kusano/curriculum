<?php
require("getData.php");
$getData = new getData();
$user = $getData->getUserData();
$post = $getData->getPostData();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
    <div class="header-left">
      <img src="YI.png" alt="YI画像" height="120" width="200px">
    </div>
    <div class="header-right">
      <div class="header-right-header">ようこそ <?php echo $user['last_name'].$user['first_name']; ?> さん</div>
      <div class="header-right-footer">最終ログイン日：<?php echo $user['last_login']; ?></div>
    </div>
  </div>
  <div class="main">
    <table>
      <tr>
        <th>記事ID</th><th>タイトル</th><th>カテゴリ</th><th>本文</th><th>投稿日</th>
      </tr>
      <?php foreach($post as $p){?>
        <tr>
          <td><?php echo $p['id']; ?></td>
          <td><?php echo $p['title']; ?></td>
          <td><?php if($p['category_no'] == 1){echo "食事";}elseif($p['category_no'] == 2){echo "旅行";}else{echo "その他";} ?></td>
          <td><?php echo $p['comment']; ?></td>
          <td><?php echo $p['created']; ?></td>
        </tr>
      <?php } ?>
    </table>
  </div>
  <div class="footer">Y&I group.inc</div>
</body>