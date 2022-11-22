<?php

function getQuizData($conn, $query){
    $data = mysqli_query($conn, $query);
    if ($data->num_rows > 0) {
        $dataAsArray = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $dataAsArray;
    }
    return false;
}

?>