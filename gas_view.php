<?php 
  include "db_info.php";
?>

<?php
// device table에 있는 디바이스명으로 드롭다운 메뉴를 만든다
  //MYSQL연결한다
  $conn = mysqli_connect('localhost', $db_id, $db_pw , $db_name);
  $query = "select * from gas";
  $result = mysqli_query($conn, $query);
?>

<?php
   //데이터를 읽어오는 쿼리를 작성한다
   $query = "select * from gas order by num desc limit 1;";
   //쿼리를 실행한다
   $result = mysqli_query($conn, $query);
   //결과를 출력한다
   echo "<table border=1 width=500>"; 
    echo "<tr>";
    echo "<th>번호</th>";
    echo "<th>gas</th>";
    echo "<th>cds</th>";
    echo "<th>업로드시간</th>";
    echo "</tr>";
    $i = 0;
   while($row = mysqli_fetch_assoc($result)){//db에서 가져온 값을 한 레코드로 때서 키 값으로 조회
    $mylabel[$i] = $row['date'];
    $mygas[$i] = $row['gas'];
    $mycds[$i] = $row['cds'];
    if($i == 0){
      $mygas = $row['gas'];
      $mycds = $row['cds'];
    }
    $i ++;
    echo "<tr>";
    echo "<td>".$row['num']."</td>";
    echo "<td>".$row['gas']."</td>";
    echo "<td>".$row['cds']."</td>";
    echo "<td>".$row['date']."</td>";
    echo "</tr>";
  }
?>
<?php
// device table에 있는 디바이스명으로 드롭다운 메뉴를 만든다
  //MYSQL연결한다
  $query = "select cds,gas from gas order by date desc limit 1";
  $result = mysqli_query($conn, $query);
  echo "<table border=1 width=500>"; 
    echo "<tr>";
    echo "<th></th>";
    echo "<th>gas</th>";
    echo "<th>cds</th>";
    echo "</tr>";
    $i=0;
  while($row = mysqli_fetch_assoc($result)){//db에서 가져온 값을 한 레코드로 때서 키 값으로 조회
    $mygas[$i] = $row['gas'];
    $mycds[$i] = $row['cds'];
    if($i == 0){
      $mygas = $row['gas'];
      $mycds = $row['cds'];
    }
    
    if($mygas<10){
      $gas_state = "정상";
    }else{
      $gas_state = "위험";
    }
    if($mycds < 1500){
      $cds_state = "낯";
    }
    else {
      $cds_state = "밤";
    }
    $i ++;
    echo "<tr>";
    echo "<td>값</td>";
    echo "<td>".$row['gas']."</td>";
    echo "<td>".$row['cds']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>결과</td>";
    echo "<td>".$gas_state."</td>";
    echo "<td>".$cds_state."</td>";
    echo "</tr>";
  }

?>
