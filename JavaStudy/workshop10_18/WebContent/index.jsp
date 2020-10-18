<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page import="bean.ItemBean"%>
<%
	/* 問① getAttributeに適切な引数をセットして、EployeeControllerから渡されたBeanを取得する。 */
	ItemBean itemBean = (ItemBean) request.getAttribute("ItemBean");
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

<img src="${pageContext.request.contextPath}/image/bed.jpg">
</body>
</html>