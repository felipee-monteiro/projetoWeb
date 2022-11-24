<?php

function doQuizOperations($conn, $query){
    $data = mysqli_query($conn, $query);
    if (is_bool($data)) {
        header("Location: http://localhost/projetoWeb/views/allQuizzes.php");
    }  
    $dataAsArray = mysqli_fetch_all($data, MYSQLI_ASSOC);
    return $dataAsArray;
}

?>