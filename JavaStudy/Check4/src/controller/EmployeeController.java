package controller;
/**
 * 社員情報管理コントローラー
 */
// 	例外処理　ファイルやネットワーク等の入出力中のエラー
import java.io.IOException;

import javax.servlet.RequestDispatcher;
//webスコープ　マスターデータのキャッシュやアクセスカウント数の保管。
import javax.servlet.ServletContext;
import javax.servlet.ServletException;
//webスコープ　ログインIDやパスワード情報の保管。
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import bean.EmployeeBean;
import service.EmployeeService;

//継承しているHttpSerbletクラスのdopost()メソッドによりPOST通信で
//第1引数HttpServletRequestインタフェース＝HTTPリクエストに対応
//第2引数HttpServletResponseインタフェース＝HTTPレスポンスに対応

public class EmployeeController extends HttpServlet {
 public void doPost(HttpServletRequest request, HttpServletResponse response)
 throws ServletException, IOException {
//throws 上位の処理へ例外を投げる。
 try {
  // 問① index.htmlから送信されたIDとPassWordの値を取得できるように修正しましょう。
//	 HttpServletRequestインターフェースの、 requestオブジェクト を使用してパラメータを読み込みそれぞれの変数へ代入
 String id = request.getParameter("id");
 String password = request.getParameter("pass");

 /*
 * IDとPassWordと元に、社員情報を検索する関数の呼び出し、結果をJSPに渡す処理
 * ※ EmployeeBeanとEmployeeServiceをimportするのを忘れないでください。
 */

  // 問② EmployeeServiceクラスをインスタンス化する。
 EmployeeService srev = new EmployeeService();
  // 問③ EmployeeBeanに、EmployeeServiceよりsearch関数を呼び出し、返り値を格納する。
 EmployeeBean bean = srev.search(id, password);
  // 問④ nullの部分に適切な引数をセットする。
 request.setAttribute("EmployeeBean", bean);

 } catch (Exception e) {
 e.printStackTrace();
 } finally {
 ServletContext context = this.getServletContext();
 RequestDispatcher dispatcher = context.getRequestDispatcher("/index.jsp");
 dispatcher.forward(request, response);
 }
 }
}