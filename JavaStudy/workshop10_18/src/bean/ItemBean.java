package bean;
 //商品情報データ

 public class ItemBean {
 private String id;
 private String name;
 private String price;
 private String insert_date;
 private String img_url;



 public void setId(String id) {
     this.id = id;
 }
 public String Id() {
     return id;
 }

 public void setName(String name) {
     this.name = name;
 }
 public String getName() {
     return name;
 }

 public void setPrice(String price) {
     this.price = price;
 }
 public String getPrice() {
     return price;
 }

 public void setInsert_date(String insert_date) {
     this.insert_date = insert_date;
 }
 public String getInsert_date() {
     return insert_date;
 }
 public void setImg_url(String img_url) {
     this.img_url = img_url;
 }
 public String getImg_url() {
	 return img_url;
 }
 }
