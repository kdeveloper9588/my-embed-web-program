<?php
    $conn = mysqli_connect('localhost', 'root', '','example1');
    $query = "insert into test(data) values(".$_GET['num'].");";
    $result = mysqli_query($conn, $query);
    if($result){
        echo"<script> alert('저장에 성공했습니다.')</script>";
    }else{
        echo"<script> alert('실패!')</script>";
    }
?>