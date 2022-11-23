<?php 

 include '../includes/htmlTemplate.php';
 require_once '../database/connection.php';
 require_once '../database/getQuizData.php';
 
 $correctAnswers = array();

 if (isset($_GET['quiz_id']) && is_numeric($_GET['quiz_id'])) {
     $quizId = $_GET['quiz_id'];
     $quiz = getQuizData($connection, "SELECT * FROM quiz_data WHERE id = '$quizId'");
     mysqli_close($connection);

     if ($quiz) {
        $content = '<form class="p-4 p-md-5 border rounded-3 bg-light" id="new-quiz-form">';
        $quizData = $quiz[0];
        $data = json_decode($quizData['data'], true);
        $questions = $data['questions'];
        $mainTitle = $data['title'];
        $theme = $data['theme'];
        $createdAtAsDateInterface = date_create($quizData['created_at']);
        $createdAt = date_format($createdAtAsDateInterface, "d/m/Y H:i:s");
        $updatedAtAsDateInterface = date_create($quizData['updated_at']);
        $updatedAt = date_format($updatedAtAsDateInterface, "d/m/Y H:i:s");     

        foreach ($questions as $key => $question) {
            $correctAnswers[] = $question['correctAnswer'];
            $key += 1;
            $title = $question['title'];
            $content = $content."
                <fieldset class='form-floating mb-3'>
                  <legend>$key - $title</legend>
            ";
            foreach ($question['options'] as $optionKey => $option) {
                $content = $content."
                   <input type='radio' data-answer='$key' value='$option' name='answers-$key' />
                   <p>$option</p>   
                ";
                if ((count($question['options']) - 1) == $optionKey) {
                    $content = $content."
                    </fieldset>";
                }
            }
        }
       
        $content = $content."
            <button type='submit' class='btn btn-primary'>Finalizar</button>
        </form>";

        generateTemplate("
            <div class='container col-xl-10 col-xxl-8 px-4 py-5'>
                <div class='w-100 col-lg-7 text-center' style='margin-bottom: 5rem;'>
                    <h1 class='display-4 fw-bold lh-1 mb-3'>
                        $mainTitle
                    </h1>
                    <p class='fs-4'>Criado em $createdAt</p>
                    <h2 class='fs-4'>$theme</h2>
                </div>
                $content
            </div>
            <p class='fs-9'>Atualizado em $updatedAt</p>
        ");
     } else {
        show404Page();
     }
 } else {
    show404Page();
 }

?>