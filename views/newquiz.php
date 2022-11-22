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
            <label for="floatingInput">Título</label>
          </div>  
          <fieldset>
          <legend> Tema </legend>
          <div>
            <p><label> <input type = "checkbox" id = "cinema" name = "tema" value = "cinema">
             <label for="cine"> Cinema </label></p>
          </div>
          <div>
            <p><label> <input type = "checkbox" id = "geografia" name = "tema" value = "geografia">
            <label for = "geografia"> Geografia </label> </label></p>
          </div>
          <div>
            <p><label> <input type = "checkbox" id = "musica" name = "tema" value = "musica">
            <label for = "musica"> Música </label> </label></p>
          </div>
          <div>
            <p><label> <input type = "checkbox" id = "esportes" name = "tema" value = "esportes">
            <label for = "esportes"> Esportes </label> </label></p>
          </div>
          <div>
            <p><label> <input type = "checkbox" id = "ciencias" name = "tema" value = "ciencias">
            <label for = "ciencias"> Ciências </label> </label></p>
          </div>
          <div>
            <p><label> <input type = "checkbox" id = "conhecimentosgerais" name = "tema" value = "conhecimentosgerais">
            <label for = "conhecimentosgerais"> Conhecimentos Gerais </ label> </label></p>
          </div>
          <div>
            <p><label> <input type = "checkbox" id = "matematica" name = "theme" value = "matematica">
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
            <p><label> <input type = "checkbox" id = "historia" name = "theme" value = "historia">
            <label for = "historia"> História </label> </label></p>
          </div>
          <div>
            <p><label> <input type = "checkbox" id = "games" name = "theme" value = "games">
            <label for = "games"> Games </label> </label></p>
          </div>
          <div>
            <input type = "checkbox" id = "other" name = "theme" value = "other">
            <label for = "other"> Outro </label> </label></p>
            <input type = "text" id = "otherValue" name = "other">
          </div>
          </fieldset>
          <br>
          <br>
          <fieldset class="form-floating mb-3" id="inputs-wrapper" name="questions[]">
            <input type="text" class="form-control" id="main-input" placeholder="Pergunta 1" required="true" name="questions[0][title]">
            <label for="main-input" id="main-label">Pergunta 1 - Título</label>
            <fieldset name="question-options" class="mt-4" form="new-quiz-form">
                <input type="text" class="form-control mb-2" placeholder="A" name="questions[0][options][A]"/>
                <input type="text" class="form-control mb-2" placeholder="B" name="questions[0][options][B]"/>
                <input type="text" class="form-control mb-2" placeholder="C" name="questions[0][options][C]"/>
                <input type="text" class="form-control mb-2" placeholder="D" name="questions[0][options][D]"/>
                <input type="text" class="form-control mb-2" placeholder="E" name="questions[0][options][E]"/>
            </fieldset>
            <button class="w-100 my-3 btn btn-primary" type="button" id="add-button">+</button>
          </fieldset>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Criar Quiz</button>
          <hr class="my-4">
          <small class="text-muted">Ao clicar em "Criar Quiz", você estará aceitando os termos de uso.</small>
        </form>
      </div>
    </div>
  </div>
';

$script = "
        const addButton = document.querySelector('#add-button');
        const inputsWrapper = document.querySelector('#inputs-wrapper');
        let inputs = 0;

        if (addButton && inputsWrapper) {
            addButton.onclick = () => {
              inputs++;
              const node = inputsWrapper.cloneNode({deep: true});
              inputsWrapper.after(node);

            }
        }
";

generateTemplate($newQuizContent, true, $script);

?>
