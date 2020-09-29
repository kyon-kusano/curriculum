<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="${pageContext.request.contextPath}/css/style.css">
</head>
<body>
	<%@ include file="header.jsp"%>
<!-- name、idの入力エリアを作成しなさい -->
	<div class="main">
		<table>
			<tr>
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