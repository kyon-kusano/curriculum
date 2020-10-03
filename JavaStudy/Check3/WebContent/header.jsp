<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!-- pageディレクティブで SimpleDateFormat クラスをインポートしています。日付のフォーマットデータ変換するためのクラス-->
<%@ page import="java.util.*,java.text.SimpleDateFormat"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<div class="header">
		<div class="label">
			<label class="login" >login</label>
		   	<label class="label-header">
		   		<!-- Dateクラスのインスタンス化し現在の日付と時刻を取得している。 -->
			   	<% Date date = new Date();
		   		/* SimpleDateFormatクラスのインスタンス化し引数でフォーマットパターンを渡して指定しています。 */
			   	SimpleDateFormat sdf = new SimpleDateFormat("yyyy/MM/dd");
		   		/* SimpleDateFormatクラスのfomatメソッドで現在の日付と時刻を引数で渡し、文字列からテキストを解析して Dateを生成しfomatDateという変数に代入しています。 */
			   	String formatDate = sdf.format(date); %>
			   	<%= formatDate %>
		   	</label>
	   	</div>
   </div>
<!-- </body>
</html> -->