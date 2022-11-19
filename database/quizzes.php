<?php

require_once "connection.php";

function getQuizzes($connection){
    $quizzes = mysqli_query($connection, "SELECT * FROM quiz_data");
    $quizzesArray = mysqli_fetch_array($quizzes);
    return $quizzesArray;
}

function getQuiz($connection, $quizId){
    $quizzes = mysqli_query($connection, "SELECT * FROM quiz_data WHERE id = '$quizId'");
    $quizArray = mysqli_fetch_array($quizzes);
    return $quizArray;   
}

$quizzes = getQuizzes($connection);