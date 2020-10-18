let num = 1;
while(num <= 100){
  if(num % 3 === 0 && num % 5 ===0){
    console.log("FizzBuzz!!");
    num++;
    continue;
  }else if(num % 3 === 0){
    console.log("Fizz!");
    num++;
    continue;
  }else if(num % 5 === 0){
    console.log("Bizz!");
    num++;
    continue;
  }else{
    console.log(num);
    num++;
  }
}
