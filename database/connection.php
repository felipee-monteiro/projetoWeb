<?php
    $hostname = "localhost";
    $username = "root";
    $dbname = "quiz";
    
    $connection = mysqli_connect($hostname, $username, null, $dbname);

    if (mysqli_connect_errno()) {
        echo "An error was ocurred. Contact the system`s administrator.";
        exit(1);
    }
?>