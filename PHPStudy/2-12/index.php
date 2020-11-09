<form action="result.php" method="post">
        お名前：<input type="text" name="my_name"/><br>
        ご希望商品：
        <input type="radio" name="item" value="A賞">A賞
        <input type="radio" name="item" value="B賞">B賞
        <input type="radio" name="item" value="C賞">C賞<br>
        個数：
        <select name="num">
          <?php for ($i = 1; $i <= 10; $i++){ ?>
            <option value="<?php echo $i; ?>">
              <?php echo $i; ?>
            </option>
          <?php } ?>
        </select><br>
        <input type="submit" value="申込" />
    </form>

<!-- 
1. モジュール：ひとまとまりの機能のことを指し示し、独立性の高い交換可能なものといった意味合いを含む
2. バージョン管理システム：ファイルに「誰が」「いつ」「何を変更したか」の情報を記録し、過去のある時点の状態を復元できるシステム。
3. サブクエリ：データベースなどの問い合わせ（クエリ）文の内部に含まれる、別の問い合わせ文
 -->

