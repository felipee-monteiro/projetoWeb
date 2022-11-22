<?php 

 include '../includes/htmlTemplate.php';
 require_once '../database/connection.php';
 require_once '../database/getQuizData.php';

 if (isset($_GET['quiz_id']) && is_numeric($_GET['quiz_id'])) {
     $quizId = $_GET['quiz_id'];
     $quiz = getQuizData($connection, "SELECT * FROM quiz_data WHERE id = '$quizId'");
     mysqli_close($connection);
     $options = "";
     if ($quiz) {
        foreach ($quiz as $quizData){
            $data = json_decode($quizData['data']);
            echo $data->title;
            foreach ($data->questions as $question) {
                $options = implode(" ", $question->options);
               
            }
        }
     } else {
        generateTemplate("<div class='h-100 d-flex justify-content-center align-items-center'>ERROR 404</div>");
     }
 }

?>