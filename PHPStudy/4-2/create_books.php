<?php
// db_connect.phpの読み込み
require_once('db_connect.php');

// function.phpの読み込み
require('function.php');

// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();

// 提出ボタンが押された場合
if (isset($_POST['post'])) {
    // titleとcontentの入力チェック
    if (!empty($_POST['title'])) {
        echo 'タイトルが未入力です。';
    } elseif (!empty($_POST['date'])) {
        echo '発売日が未入力です。';
    } elseif (!empty($_POST['stock'])) {
        echo '在庫数が未入力です。';
    }

    if (!empty($_POST['title']) && !empty($_POST['date']) && !empty($_POST['stock'])) {
        // 入力したtitleとcontentを格納
        $title = $_POST['title'];
        $date = $_POST['date'];
        $stock = $_POST['stock'];
        // PDOのインスタンスを取得
        $pdo = db_connect();
        try {
            // SQL文の準備
            $sql = "INSERT INTO books (title,date,stock) VALUES (:title,:date,:stock)";
            // プリペアドステートメントの準備
            $stmt = $pdo->prepare($sql);
            // タイトルをバインド
            $stmt->bindparam(':title',$title); 
            // 発売日をバインド
            $stmt->bindparam(':date',$date);
            // 在庫数をバインド
            $stmt->bindparam(':stock',$stock);
            // 実行
            $stmt->execute();
            // main.phpにリダイレクト
            header("Location: main.php");
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo "データベースエラー".$e->getMessage();
            // 終了
            die();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="title">本 登録画面</div>
    <form method="POST" action="">
        <input type="text" name="title" id="title" size="30" placeholder="タイトル">
        <br>
        <input type="date" name="date" id="date" size="30" placeholder="発売日">
        <br>
        在庫数<br>
        <select name="stock" id="stock" >
            <option hidden>選択して下さい</option>
            <?php for($i=1; $i<= 100; $i++){ echo '<option value='.$i.'>'.$i.'</option>';}?>
        </select>
        <br>
        <input type="submit" value="登録" id="post" name="post">
    </form>
</body>
</html>