<?php 

 include "../includes/htmlTemplate.php";
 require_once "../database/connection.php";
 require_once "../database/quizzes.php";

 if (isset($_GET['quiz_id']) && is_numeric($_GET['quiz_id'])) {
     $quizId = $_GET['quiz_id'];
     $quiz = getQuiz($connection, $quizId);
     $data = json_decode($quiz['3']);
     echo "<h1>".$data->title."</h1>";
 }