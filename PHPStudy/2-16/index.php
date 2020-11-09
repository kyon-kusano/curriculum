<?php
    $testFile = "test.txt";
    $contents = "こんにちは！";
    
    if (is_writable($testFile)) {
        // 書き込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($testFile, "a");
        // 対象のファイルに書き込む
        fwrite($fp, $contents);
        // ファイルを閉じる
        fclose($fp);
        // 書き込みした旨の表示
        echo "finish writing!!";
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        exit;
    }
?>
<?php
    $test_file = "test2.txt";
    
    if (is_readable($test_file)) {
        // 読み込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($test_file, "r");
        // 開いたファイルから1行ずつ読み込む
        while ($line = fgets($fp)) {
            // 改行コード込みで1行ずつ出力
            echo $line.'<br>';
        }
        // ファイルを閉じる
        fclose($fp);
    } else {
        // 読み込み不可のときの処理
        echo "not readable!";
        exit;
    }
    ?>

<!-- 
1. CakePHPの2系・3系の違い：2系に比べ速度、使える機能が多い、ライブラリのバージョン管理が容易、可読性が上がった、ModelクラスがTableとEntityの２つに分離、大きな違いは連想配列地獄がオブジェクトのメソッドチェインに変わる
2. LAMP：Webアプリケーションのプラットフォームとなるオープンソースソフトウェアの組み合わせで、OSの「Linux」、サーバーソフトウェアの「Apache」、データベース管理システムの「MySQL」、そしてオブジェクト指向のスクリプト言語である「PHP」（あるいはPerl、Python）のセット
3. AWS：Amazon Web Servicesの略。アマゾンが提供するクラウドサービスの総称。
 -->
