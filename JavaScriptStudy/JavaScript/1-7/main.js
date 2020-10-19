class Taiyaki{
  constructor(type){
    this.type = type;
  }
  contents(){
    console.log(`中身は${this.type}です`);
  }
}
let beanPaste = new Taiyaki("あんこ");
beanPaste.contents();
let cream = new Taiyaki("クリーム");
cream.contents();
let cheese = new Taiyaki("チーズ");
cheese.contents();
