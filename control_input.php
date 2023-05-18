<form method = post action = control_input_process.php>
<select name="did">
    <option value="none">=== 선택 ===</option>
<?php
// device table에 있는 디바이스명으로 드롭다운 메뉴를 만든다
  //MYSQL연결한다
  $conn = mysqli_connect('localhost', 'root', ' ','bssm2_4');
  $query = "select * from device";
  $result = mysqli_query($conn, $query);
  while($row = mysqli_fetch_assoc($result)) { 
    echo "<option value='".$row['did']."'>".$row['did']."</option>";
  }
?>
</select>
<br>
핀번호 : <input type = text name = pinnum><br>
제어명령 : OFF<input type = radio name = cmd value = 0 checked> ON<input type = radio name = cmd value =1>
<br>
<input type = submit value = 전송>
</form>