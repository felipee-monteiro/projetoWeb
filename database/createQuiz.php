<?php
    require_once "../database/connection.php";
    require_once "../database/getQuizData.php";

    if (isset($_POST['questions'], $_POST['title'], $_POST['theme'])) {
        $title = $_POST['title'];
        $theme = $_POST['theme'];
        $questions = $_POST['questions'];
        $questionAsjson = json_encode($_POST);
        getQuizData($connection, "INSERT INTO `quiz_data` (`data`) VALUES ($questionAsjson);");   
    }
?>