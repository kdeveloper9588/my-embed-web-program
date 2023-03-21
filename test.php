<?php
    $num1 = 10;
    $num2 = '10';

    $num3 = [1, 2, 3, 4, 5];
    $num4 = ['name'=>'kimjunil', 'age'=>'17'];


    echo $num1 + $num2;//10 php는 연산자가 해석을 한다
    echo $num1.$num2;// 1020 +는 숫자를 더하는 거.은 문자를 연결

    echo $num[3];

    //js == event 모든 프로그래밍에서 함수는 실행이 되면 콜이 되어야 함

    myfunction();//콜
    function myfunction() {
        echo "나는 php 함수입니다.";
    }
    myfunction(10);//콜
    function myfunction($num) {//<--인자
        echo "나는 php 함수입니다." . $num;
    }

    

?>