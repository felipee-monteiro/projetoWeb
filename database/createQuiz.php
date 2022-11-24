<?php
    require_once "../requires/htmlTemplate.php";
    require_once "../database/connection.php";
    require_once "../database/quiz.php";

    if (isset($_POST['questions'], $_POST['title'], $_POST['theme'], $_POST['questions'])) {
        $questionAsjson = json_encode($_POST);
        $result = doQuizOperations($connection, "INSERT INTO `quiz_data` (`id`, `created_at`, `updated_at`, `data`) VALUES (NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '$questionAsjson');");
        if ($result) {
            header('Location: /views/allQuizzes.php');
        }
    } else {
        show404Page();
    }
?>