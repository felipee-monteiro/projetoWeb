<?php 

 include "../includes/htmlTemplate.php";
 require_once "../database/connection.php";
 require_once "../database/quizzes.php";

 if (isset($_GET['quiz_id']) && is_numeric($_GET['quiz_id'])) {
     $quizId = $_GET['quiz_id'];
     $quiz = getQuizData($connection, "SELECT * FROM quiz_data WHERE id = '$quizId'");
     mysqli_close($connection);
     if ($quiz) {
        $data = json_decode($quiz['3']);
        echo "<h1>".$data->title."</h1>";
        foreach ($data->questions as $question){
            echo "<h1>$question->title</h1>";
            foreach ($question->options as $option){
                echo "$option<br>";
            }
        }
     } else {
        generateTemplate("<div class='h-100 d-flex justify-content-center align-items-center'>ERROR 404</div>");
     }
 }

?>