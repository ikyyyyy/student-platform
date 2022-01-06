<?php
    $serverName = 'localhost';
    $userName = 'root';
    $dbPassword = '';
    $dbName = 'loginproject';

    $connection = mysqli_connect($serverName, $userName, $dbPassword, $dbName);
    if(! $connection){
        die("connection failed :".mysqli_error());
    }
