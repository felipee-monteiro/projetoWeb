<?php 
    require_once "../database/connection.php";
    require_once "../database/quizzes.php";
    require_once "../includes/htmlTemplate.php";

    $quizes = getQuizData($connection, "SELECT data FROM quiz_data");
    mysqli_close($connection);

    if ($quizes) {
        foreach ($quizes as $quiz) {
            echo $quiz;
        }
    }
?>