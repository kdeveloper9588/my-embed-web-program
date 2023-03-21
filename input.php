<script>
   window.onload = function() {//<-- 요건 좀 어려움 걍 온클릭 쓰삼
    var mybtn1 = document.getElementById('mybtn1');
    mybtn1.addEventListener('click',()=>{
        console.log("버튼 1눌러짐");
        //mysubmit1
    });
    var mybtn2 = document.getElementById('mybtn2');
    mybtn2.addEventListener('click',()=>{
        console.log("버튼 2눌러짐");
        //mysubmit2
    });
    function mysubmit1(e){
        // var myform = document.getElementById('myform');
        // //myform.submit();
        // var txt1 = document.getElementById('txt1');
        // var txt2 = document.getElementById('txt2');

        // if(txt1.value != "" && txt2.value != ""){
        //     myform.submit();
        // }else{
        //     alert('값을 입력해주세요!');
        // }
   
    } 
}
<?
    //mysql과 접속한다
    $conn = mysql_connect('localhost','root','','example1');

    $query = "select * from table1";

    $result = mysql_query($conn, $query);

    echo "<table border=1 width = 500>";
        echo "<tr>";
        echo "<th>번호</th>";
        ehco "<th>이름</th>";
        ehco "<th>나이</th>";
        echo "<th>성별</th>";
        echo "<th>키</th>";
        echo "</tr>";

    while ( $row = mysql_fetch_assoc($result) ){
        echo "<tr>";
        echo "<td>". $row['num']. "</td>";
        echo "<td>". $row['name']. "</td>";
        echo "<td>". $row['age']. "</td>";
        echo "<td>". $row['gender']. "</td>";
        echo "<td>". $row['heghit']. "</td>";
        echo "</tr>";


         echo $row["name"]. " ,". $row["age"]. ",". 
         $row["gender"]. ",". $row["heghit"]. "<BR>" ;
    }
?>
</script>
<form  id = myform method = post action = process.php>
<input  id = txt1 type = text name = myname>
<input id = txt1 type = text name = myname>
<input id = mybtn1 type = submit value = 확인>
<input id = mybtn2 type = submit value = 확인>

</form>

