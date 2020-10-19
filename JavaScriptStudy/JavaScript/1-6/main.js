let scores = [10,15,20,25];
console.log(scores);
let num = 0;
while(num < scores.length){
  if( scores[num] % 2 === 0 ){
    console.log(scores[num] + "は偶数です。");
  }
  num++;
}

let car = {
  gass: 20.5,
  num: 1234,
};
console.log(car);
console.log("ガソリンは" + car.gass + "です");
console.log("ナンバーは" + car.num + "です");

