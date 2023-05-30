<?php 
  include "db_info.php";
?>
<?php
// device table에 있는 디바이스명으로 드롭다운 메뉴를 만든다
  //MYSQL연결한다
  $conn = mysqli_connect('localhost', $db_id, $db_pw , $db_name);
  $query = "select * from gas order by num desc limit 1";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);//row의 갯수
  //조회한 결고ㅑㅏ가 0일때
  //결과를 프린트 한다
  if($count == 1){
    $row = mysqli_fetch_assoc($result);
    //json으로 만들어서 response 해주어야 한다
    //$row['num'], $row['gas'], $row['cds'], $row['data]
    echo json_encode($row);
  }
 
?>

