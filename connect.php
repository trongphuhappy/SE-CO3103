<?php
    $serverName = 'localhost'; 
    $userName = 'root';
    $passWord = '';
    $connect = mysqli_connect($serverName, $userName, $passWord);
    if(!$connect)
        die("Connection failed" . mysqli_connect_error());
    mysqli_select_db($connect, 'project');

?>