<!-- pageディレクティブでページの表示に関する設定、JSPで使用する言語 データ型、文字コードを指定しています。 -->
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!-- ドキュメントのタイプ設定、ＨＴＭＬ４．０１以前のバージョンを利用した場合でも互換性を保つ、 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- linkでCSSファイルと連携させています。パスにはルートパスを暗黙オブジェクトを利用して記載しています。
オブジェクトの管理、クライアントからのリクエスト取得、ルートパス -->
<link rel="stylesheet" href="${pageContext.request.contextPath}/css/style.css">
</head>
<body>
	<!-- includeディレクティブによりheader.jspファイルを呼び出しています。 -->
	<%@ include file="header.jsp"%>
<!-- name、idの入力エリアを作成しなさい -->
	<div class="main">
	<!-- tableタグを利用し表形式で表示させるようにしています。trがテーブルロウ　列、tbがテーブルデータ 表内の要素 -->
		<table>
			<tr>
			<!-- tbのalignオプションを使うことで中央寄せしています。label -->
				<td align="center"><label for="name">name</label></td>
				<td><textarea class="name-area" id="name"></textarea></td>
			</tr>
			<tr>
				<td align="center"><label for="id" >id</label></td>
				<td><textarea class="id-area" id="id"></textarea></td>
			</tr>
		</table>
	</div>
	<%@ include file="footer.jsp"%>
</body>
</html>