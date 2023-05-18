<?php
    $conn = mysqli_connect('localhost', 'root', ' ', 'bssm2_4');
    $did = $_GET['did'];
    $query = "select * from control where did='".$did."' and checked=0 order by num
    desc limit 1;";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
   if($count == 0){
    
       //조회결과 없음
       $data['pin'] = -1;
       $data['cmd'] = 0;
   }else{
       //조회결과 있음
       $row = mysqli_fetch_assoc($result); //key value 구조
       $data['pin'] = $row['pin'];
       $data['cmd'] = $row['cmd'];

       //해당되는 레코드에 checked를 1로 업데이트 해줌 내가 봤다는 것을 확인
   }
    echo json_encode($data);
?>
