<?php
   $did = $_GET['did'];
   $temp = $_GET['temp'];
   $humi = $_GET['humi'];
   $date = date_default_timezone_set('Asia/Seoul');

   //MYSQL연결한다
   $conn = mysqli_connect('localhost', 'root', '','bssm2_4');

   // device table에 접속해서 있는지 없는지 확인한다
   $query2 = "select * from device where did='".$did."'";
   $result2 = mysqli_query($conn, $query2);
   $count = mysqli_num_rows($result2);

   if($count == 1) {
    // 존재하는 경우
   } else {
    // 존재하지 않는 경우
    echo "등록된 디바이스가 아닙니다";
    exit; //실행중지
   }
   
    //데이터를 insert하는 SQL쿼리를 작성
    $query = "insert into sensor(did,temp,humi,date) values('".$did."',".$temp.",".$humi.",'".$date."');";
    //SQL쿼리를 실행
    $result = mysqli_query($conn, $query);
    //실행결과 확인
    if($result){
     echo "성공";
    }else{
     echo "실패";
    }
?>