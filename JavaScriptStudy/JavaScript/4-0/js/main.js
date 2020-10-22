var app = new Vue({
  el: '#app',
  data: {
    counter: 0
  },
  methods: {
    counterBtn: function() {
      this.counter++;
    }
  }
});