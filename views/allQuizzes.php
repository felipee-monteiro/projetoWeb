<?php 
    require_once "../database/connection.php";
    require_once "../database/getQuizData.php";
    include_once "../includes/htmlTemplate.php";

    $quizContentAsArray = array();
    $quizes = getQuizData($connection, "SELECT id, data FROM quiz_data");
    mysqli_close($connection);

    if ($quizes) {
        foreach ($quizes as $quiz) {
           $quizId = $quiz['id']; 
           $quiz = json_decode($quiz['data']);
           array_push($quizContentAsArray, "
                     <div class='card m-2' style='width: 18rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>$quiz->title</h5>
                            <h6 class='card-subtitle mb-2 text-muted'>$quiz->theme</h6>
                            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href='quiz.php?quiz_id=$quizId' class='card-link'>Responder</a>
                        </div>
                    </div>
            ");
        }
        $quizContentAsString = implode(" ", $quizContentAsArray);
        generateTemplate("
            <div class='d-flex flex-wrap justify-content-center align-items-center my-4'>
                $quizContentAsString
            </div>
        ");
    } else {
        generateTemplate('
          <div class="h-100 text-center">
            Nenhum Quiz disponível.
          </div>
        ');
    }
?>
    