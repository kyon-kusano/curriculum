let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven(num) {
    console.log(num + 'は偶数です');
}
let n = 0;
while(n < numbers.length){
  if(numbers[n] % 2 === 0){
    isEven(numbers[n]);
  }
  n++;
}

class Car{
  constructor(gas,num){
    this.gas = gas;
    this.num = num;
  }
  getNumGas(){
    console.log(`ガソリンは${this.gas}です。ナンバーは${this.num}です`);
  }
}
let car = new Car(20.5,1234);
car.getNumGas();
