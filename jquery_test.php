<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        //로드가 완벽히 되었다!
        setInterval(function() {//데이터가 호출되서 서버에 올라가는 중
            $.ajax({
                url: "gas_data.php",
                method: "GET",
                dataType: "text",
                success: function(data){
                    var mydata = JSON.parse(data);
                    console.log(mydata);
                    //mydata.num, mydata.gas, mydata.cds, mydata.date
                        $('#mytable').prepend('<tr><td>'+mydata.num+'</td><td>'+mydata.gas+'</td><td>'+mydata.cds+'</td><td>'+mydata.date+'</td></tr>');
                        if($('#mytable > tbody tr').length>10){
                            $('#mytable > tbody tr:last').remove();
                        }
                }
            });
        }, 1000);
    });
    function test1(){
        $('#mytable').append('<tr><td>1</td><td>2</td><td>3</td><td>4</td></tr>');
    }
    function test2(){
        $('#mytable').prepend('<tr><td>5</td><td>6</td><td>7</td><td>8</td></tr>');
        if($('#mytable > tbody tr').length>10){
            $('#mytable > tbody tr:last').remove();
        }
    }
    function test3(){
        $('#mytable > tbody').empty();
    }
    function test4(){
        console.log($('#mytable > tbody tr').length);
    }
    function test5(){
        $('#mytable > tbody tr:last').remove();
    }
</script>
<button onclick=test1()>테스트1</button>
<button onclick=test2()>테스트2</button>
<button onclick=test3()>삭제</button>
<button onclick=test4()>현재갯수</button>
<button onclick=test5()>제일마지막행 삭제</button>




<table border =1 width = 500 id = mytable>
    <thead>
    <tr>
        <td>번호</td>
        <td>가스</td> 
        <td>조도</td> 
        <td>시간</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
    </tr>
    </tbody>
</table>