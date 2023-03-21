var num1 = 10;
var num2 = 10;

// console.log(num1+num2);

var num3 = [1,2,3,4,5];//리스트
// num3.push(6);
// console.log(num[5]);

var num4 = {
    num1:10,
    num2:20,
    //num3:30,
    num5:num3
};//c에서 구조체

console.log("여기서 출력",myfunction(10,20));

function myfunction(input1, input2){
    console.log("나는 js 함수이다!");
    return input1 + input2;
}

console.log(num4);
console.log(JSON.stringify(num4));// 앞으로 많이 볼 json : 데이터를 압축해서 보내고 그 압축을 푸는 느낌

