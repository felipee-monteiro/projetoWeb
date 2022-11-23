<?php

include '../includes/htmlTemplate.php';

$homePageContent = '<div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold">Pw Quiz</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Um mundo onde a curiosidade é a sua melhor característica. Participe de quizzes relacionados a todos os tipos de temas imagináveis!</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <a type="button" href="/projetoWeb/views/newQuiz.php" class="btn btn-primary btn-lg px-4 me-sm-3">Criar um Quizz</a>
        <a type="button" href="/projetoWeb/views/allQuizzes.php" class="btn btn-outline-secondary btn-lg px-4">Ver Quizzes</a>
      </div>
    </div>
    <div {
      border: 1px solid black;
      width: 100px;
      height: 100px;
    }
    
    img {
      width: 100px;
      height: 100px;
      object-fit: fill;
    }>
    <div>
      <img src="https://as1.ftcdn.net/v2/jpg/04/53/50/30/1000_F_453503025_LCOzZx1PHy1woKaRdNAcn1ba2LJLcBI4.jpg">
    </div>
  </div>';

generateTemplate($homePageContent);

?>