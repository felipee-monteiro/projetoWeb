<?php

include '../includes/htmlTemplate.php';

echo ' <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold">Pw Quiz</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Um mundo onde a curiosidade é a sua melhor característica. Participe de quizzes relacionados a todos os tipos de temas imagináveis!</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <a type="button" href="/projetoWeb/views/newQuiz.php" class="btn btn-primary btn-lg px-4 me-sm-3">Criar um Quizz</a>
        <a type="button" href="/projetoWeb/views/quiz.php?quiz_id=1" class="btn btn-outline-secondary btn-lg px-4">Ver Quizzes</a>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="https://img.freepik.com/vetores-gratis/console-com-letras-de-jogos-sinal-de-neon-no-fundo-do-tijolo_1262-11854.jpg?w=826&t=st=1668860230~exp=1668860830~hmac=8fc36117feeaad3842f01910fe91e38f57a7dfa7f66674421cba1957fca23e23" class="img-fluid  border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>';
