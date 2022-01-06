<?php
    include 'connection.php';
    $name = $firstName." ".$lastName;
    $sql = "INSERT INTO account VALUES ('', '$name', '$pwd', '$cne', ' ')";

    $result = mysqli_query($connection, $sql);
    if(! $result){
        echo 'ACCOUNT INSERTION FAILED! ';
    }
