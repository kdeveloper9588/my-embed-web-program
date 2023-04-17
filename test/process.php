<?php
    $conn = mysqli_connect('localhost', 'root', '','example1');
    //sql 쿼리를 만든다
    $query = "insert into table1(name, age, gender, height)
    values('".$_post[name]."','".$_post[age]."','".$_post[gender]."','".$_post[height]."');";
    //쿼리 실행
    $result = mysqli_query($conn, $query);

    if($result){
        echo"<script> alert('저장에 성공했습니다.')</script>";
    }else{
        echo"<script> alert('실패!')</script>";
    }

?>
<meta http-equiv="refresh" content="0";
url=input.php>