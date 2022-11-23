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

        foreach ($questions as $key => $question) {
            $correctAnswers[] = $question['correctAnswer'];
            $key += 1;
            $title = $question['title'];
            $content = $content."
                <fieldset class='form-floating mb-3'>
                  <legend>$key - $title</legend>
            ";
            foreach ($question['options'] as $optionKey => $option) {
                $letter = chr($optionKey);

                var_dump($letter);

                $content = $content."
                   <input type='radio' data-answer='$optionKey' value='$option' name='answers-$key' />
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

        $script = "
            const form = document.querySelector('form');
            form.onsubmit = e => {
                e.preventDefault();
                const fieldsets = e.target.querySelectorAll('fieldset');
                const fieldsetsAsArray = Array.from(fieldsets);

                fieldsetsAsArray.forEach(function(item){
                    const children = Array.from(item.children);
                    children.forEach(function(item){
                        if (item.tagName == 'INPUT' && item.checked) {
                            console.log(item.value);   
                        }
                    });
                    
                });
            }
        ";

        generateTemplate("
            <div class='container col-xl-10 col-xxl-8 px-4 py-5'>
                <div class='w-100 col-lg-7 text-center' style='margin-bottom: 5rem;'>
                    <h1 class='display-4 fw-bold lh-1 mb-3'>
                        $mainTitle
                    </h1>
                    <p class='fs-4'>$theme</p>
                </div>
                $content
            </div>
        ", true, $script);
     } else {
        generateTemplate("<div class='d-flex justify-content-center align-items-center'>ERROR 404</div>");
     }
 } else {
    generateTemplate("<div class='d-flex justify-content-center align-items-center'>ERROR 404</div>");
 }

?>