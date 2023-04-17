

<form method="post" action="update_process.php">
    이름:<iniput type = text name = myname><br>
    나이:<iniput type = text name = myage><br>
    성별:<iniput type = text name = mygender><br>
    키:<iniput type = text name = myhegiht><br>
    <input type = hidden name=mynum value=<?php echo $_GET['num'];?> > <br>
    <input type = submit value=확인>
</form>