var app = new Vue({
  el: '#app',
  data: {
      list: [],
      addText: '',
      addSearch: '',
  },
  //watchでlistの変更を監視
  watch: {
      list: {
          handler: function() {
              //localStorageにデータを保存
              localStorage.setItem("list", JSON.stringify(this.list));
          },
          deep: true
      }
  },
  //マウントされた時にlocalStorageからデータを取得
  mounted: function() {
      this.list = JSON.parse(localStorage.getItem("list")) || [];
  },
  methods: {
      addToDo: function() {
          if (this.addText !== '') {
              this.list.push({
                  text: this.addText, 
                  isChecked: false,
              });
          }
          this.addText = '';
      },
      deleteBtn: function() {
          this.list = this.list.filter(function(todo) {
              return !todo.isChecked;
          });
      }
  },
  computed: {
      totalToDo: function() {
        list_isCjecked = this.list.filter(function(todo) {
          return todo.isChecked;
        });
          return this.list.length - list_isCjecked.length + "/" + this.list.length;
      },
      search: function(){
        query = this.addSearch
        return this.list.filter(function(s){
          return s.text.indexOf(query) !=-1
        })
      }
  }
});