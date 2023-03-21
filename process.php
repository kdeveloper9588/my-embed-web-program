<?php
    echo $_post('myname'). '<br>';
    echo $_post('myage'). '<br>';

    if($_post['myname'] != "" && $_post['myage'] != ""){
        echo $_post['myname'].'<br>';
        echo $_post['myage'].'<br>';
    }else{
        echo "<script>";
        echo "alert("값을 입력해 주세요.");";
        echo "history.back();";
        echo "</script>";
    }
?>
  


