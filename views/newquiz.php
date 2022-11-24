<?php

include "../includes/htmlTemplate.php";

$newQuizContent = '
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="g-lg-5 py-5">
      <div class="w-100 col-lg-7 text-center" style="margin-bottom: 5rem;">
        <h1 class="display-4 fw-bold lh-1 mb-3">Personalize seus quizzes a gosto.</h1>
        <p class="fs-4">Aqui você poderá montar seus quizzes e encontrar outros que estejam adaptados a suas tendências.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5 inputs-wrapper">
        <form class="p-4 p-md-5 border rounded-3 bg-light" id="new-quiz-form" method="POST" action="../database/createQuiz.php">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Título" required="true" name="title">
            <label for="floatingInput">Título do Quiz</label>
          </div>  
          <fieldset>
            <legend>Tema</legend>
            <div>
              <p><label> <input type = "checkbox" id = "cinema" name = "theme" value = "cinema">
              <label for="cine"> Cinema </label></p>
            </div>
            <div>
              <p><label> <input type = "checkbox" id = "geografia" name = "theme" value = "geografia">
              <label for = "geografia"> Geografia </label> </label></p>
            </div>
            <div>
              <p><label> <input type = "checkbox" id = "musica" name = "theme" value = "música">
              <label for = "musica"> Música </label> </label></p>
            </div>
            <div>
              <p><label> <input type = "checkbox" id = "esportes" name = "theme" value = "esportes">
              <label for = "esportes"> Esportes </label> </label></p>
            </div>
            <div>
              <p><label> <input type = "checkbox" id = "ciencias" name = "theme" value = "ciências">
              <label for = "ciencias"> Ciências </label> </label></p>
            </div>
            <div>
              <p><label> <input type = "checkbox" id = "conhecimentosgerais" name = "theme" value = "conhecimentos gerais">
              <label for = "conhecimentosgerais"> Conhecimentos Gerais </ label> </label></p>
            </div>
            <div>
              <p><label> <input type = "checkbox" id = "matematica" name = "theme" value = "matemática">
              <label for = "matematica"> Matemática </label> </label></p>
            </div>
            <div>
              <p><label> <input type = "checkbox" id = "arte" name = "theme" value = "arte">
              <label for = "arte"> Arte </label> </label></p>
            </div>
            <div>
            <p><label> <input type = "checkbox" id = "biologia" name = "theme" value = "biologia">
              <label for = "biologia"> Biologia </label> </label></p>
            </div>
            <div>
              <p><label> <input type = "checkbox" id = "historia" name = "theme" value = "história">
              <label for = "historia"> História </label> </label></p>
            </div>
            <div>
              <p><label> <input type = "checkbox" id = "games" name = "theme" value = "games">
              <label for = "games"> Games </label> </label></p>
            </div>
          </fieldset>
          <br>
          <br>
          <fieldset class="form-floating mb-3" id="inputs-wrapper" name="questions[]">
            <input type="text" class="form-control" placeholder="Pergunta 1" required="true" name="questions[0][title]">
            <label for="main-input" id="main-label">Pergunta 1</label>
            <fieldset name="question-options" class="mt-4">
                <input type="text" class="form-control mb-2" placeholder="A" name="questions[0][options][A]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="B" name="questions[0][options][B]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="C" name="questions[0][options][C]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="D" name="questions[0][options][D]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="E" name="questions[0][options][E]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="Resposta correta" required="true" name="questions[0][correctAnswer]"/>
            </fieldset>
          </fieldset>
          <fieldset class="form-floating mb-3" id="inputs-wrapper" name="questions[]">
            <input type="text" class="form-control" placeholder="Pergunta 1" required="true" name="questions[1][title]">
            <label for="main-input" id="main-label">Pergunta 2</label>
            <fieldset name="question-options" class="mt-4">
                <input type="text" class="form-control mb-2" placeholder="A" name="questions[1][options][A]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="B" name="questions[1][options][B]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="C" name="questions[1][options][C]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="D" name="questions[1][options][D]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="E" name="questions[1][options][E]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="Resposta correta" required="true" name="questions[1][correctAnswer]"/>
            </fieldset>
          </fieldset>
          <fieldset class="form-floating mb-3" id="inputs-wrapper" name="questions[]">
            <input type="text" class="form-control" placeholder="Pergunta 1" required="true" name="questions[2][title]">
            <label for="main-input" id="main-label">Pergunta 3</label>
            <fieldset name="question-options" class="mt-4">
                <input type="text" class="form-control mb-2" placeholder="A" name="questions[2][options][A]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="B" name="questions[2][options][B]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="C" name="questions[2][options][C]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="D" name="questions[2][options][D]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="E" name="questions[2][options][E]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="Resposta correta" required="true" name="questions[2][correctAnswer]"/>
            </fieldset>
          </fieldset>
          <fieldset class="form-floating mb-3" id="inputs-wrapper" name="questions[]">
            <input type="text" class="form-control" placeholder="Pergunta 1" required="true" name="questions[3][title]">
            <label for="main-input" id="main-label">Pergunta 4</label>
            <fieldset name="question-options" class="mt-4">
                <input type="text" class="form-control mb-2" placeholder="A" name="questions[3][options][A]"/>
                <input type="text" class="form-control mb-2" placeholder="B" name="questions[3][options][B]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="C" name="questions[3][options][C]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="D" name="questions[3][options][D]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="E" name="questions[3][options][E]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="Resposta correta" required="true" name="questions[3][correctAnswer]"/>
            </fieldset>
          </fieldset>
          <fieldset class="form-floating mb-3" id="inputs-wrapper" name="questions[]">
            <input type="text" class="form-control" placeholder="Pergunta 1" required="true" name="questions[4][title]">
            <label for="main-input" id="main-label">Pergunta 5</label>
            <fieldset name="question-options" class="mt-4">
                <input type="text" class="form-control mb-2" placeholder="A" name="questions[4][options][A]"/>
                <input type="text" class="form-control mb-2" placeholder="B" name="questions[4][options][B]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="C" name="questions[4][options][C]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="D" name="questions[4][options][D]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="E" name="questions[4][options][E]" required="true"/>
                <input type="text" class="form-control mb-2" placeholder="Resposta correta" required="true" name="questions[4][correctAnswer]"/>
            </fieldset>
          </fieldset>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Criar Quiz</button>
          <hr class="my-4">
          <small class="text-muted">Ao clicar em "Criar Quiz", você estará aceitando os termos de uso.</small>
        </form>
      </div>
    </div>
  </div>
';

generateTemplate($newQuizContent);

?>
