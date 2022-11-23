<?php
    $hostname = "localhost";
    $username = "root";
    $dbname = "quiz";
    
    $connection = mysqli_connect($hostname, $username, null, $dbname);
    $isConnected = $connection->connect_errno;
?>