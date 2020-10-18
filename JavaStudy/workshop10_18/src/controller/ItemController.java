package controller;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import bean.ItemBean;
import service.ItemsService;

public class ItemController extends HttpServlet {
	 public void doPost(HttpServletRequest request, HttpServletResponse response)
	 throws ServletException, IOException {
try {

	 // 問② EmployeeServiceクラスをインスタンス化する。
	 ItemsService srev = new ItemsService();
	  // 問③ EmployeeBeanに、EmployeeServiceよりsearch関数を呼び出し、返り値を格納する。
	 ItemBean bean = srev.search();
	  // 問④ nullの部分に適切な引数をセットする。
	 request.setAttribute("ItemBean", bean);

 } catch (Exception e) {
	 e.printStackTrace();
	 } finally {
	 ServletContext context = this.getServletContext();
	 RequestDispatcher dispatcher = context.getRequestDispatcher("/index.jsp");
 dispatcher.forward(request, response);
 }
 }
}
