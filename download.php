<?php
    //db에서 데이터를 최대 7개를 꺼내서 아래 모양으로 만들어준다.
    $conn = mysqli_connect('localhost', 'root', '','bssm2_4');
    $query = "select * from sensor where did='".$_GET['did']."' order by num desc limit 30;";
    $result = mysqli_query($conn, $query);
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) { 
        $dataset['label'][$i] = $row['date'];
        $dataset['temp'][$i] = $row['temp'];
        $dataset['humi'][$i] = $row['humi'];
        $i++;
    }
    echo json_encode($dataset);
?>