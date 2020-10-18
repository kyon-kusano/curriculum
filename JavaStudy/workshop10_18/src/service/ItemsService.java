package service;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import bean.ItemBean;

/**
 * ・
 */

public class ItemsService  {

  // 問① 接続情報を記述してください
 /** ドライバーのクラス名 */
 private static final String POSTGRES_DRIVER = "org.postgresql.Driver";
 /** ・JDMC接続先情報 */
 private static final String JDBC_CONNECTION = "jdbc:postgresql://localhost:5433/workshop";
 /** ・ユーザー名 */
 private static final String USER = "postgres";
 /** ・パスワード */
 private static final String PASS = "postgres";

  // 問③ 入力されたIDとPassWordをキーにして、検索するSELECT文
 /** ・SQL SELECT文 */
 private static final String SQL_SELECT = "SELECT name price img_url FROM items ";

 ItemBean itemDate = null;

 public ItemBean search() {

 Connection connection = null;
 Statement statement = null;
 ResultSet resultSet = null;

 try {
 // データベースに接続
 Class.forName(POSTGRES_DRIVER);
 connection = DriverManager.getConnection(JDBC_CONNECTION, USER, PASS);
 statement = connection.createStatement();

 resultSet = statement.executeQuery(SQL_SELECT);

 while (resultSet.next()) {
	 String tmpName = resultSet.getString("name");
	 String tmpPrice = resultSet.getString("price");
	 String tmpImg_url = resultSet.getString("img_url");

	 itemDate = new ItemBean();
	 itemDate.setName(tmpName);
	 itemDate.setPrice(tmpPrice);
	 itemDate.setImg_url(tmpImg_url);
 }

 } catch (ClassNotFoundException e) {
 e.printStackTrace();

  // getConnection()、createStatement()、executeQuery()で例外発生
 } catch (SQLException e) {
 e.printStackTrace();

 } finally {
 try {

 if (resultSet != null) {
 resultSet.close();
 }
 if (statement != null) {
 statement.close();
 }
 if (connection != null) {
 connection.close();
 }

 } catch (SQLException e) {
 e.printStackTrace();
 }
 }
 return itemDate;
 }

}