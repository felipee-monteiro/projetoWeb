<?php

require_once "connection.php";

function getQuizData($conn, $query){
    $data = mysqli_query($conn, $query);
    if ($data->num_rows > 0) {
        $dataAsArray = mysqli_fetch_array($data);
        return $dataAsArray;
    }
    return false;
}

?>