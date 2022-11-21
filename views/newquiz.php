<?php

include "../includes/htmlTemplate.php";

$newQuizContent = '
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Personalize seus quizzes a gosto.</h1>
        <p class="col-lg-10 fs-4">Aqui você poderá montar seus quizzes e encontrar outros que estejam adaptados a suas tendências.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="title">
            <label for="floatingInput">Título</label>
          </div>
          </ div>
          <div class="form-floating mb-3">
            <input type="number" min="0" max="15" class="form-control" id="floatingInput" placeholder="questions">
            <label for="floatingInput">Quantidade de perguntas do Quiz</label>
          </div>
          <fieldset>
          <label for="floatingInput">Tema</label>
          </ fieldset>
          <div>
            <input type = "checkbox" id = "cinema" name = "theme" value = "cinema">
             <label for = "cine"> Cinema </ label>
          </ div>
          <div>
            <input type = "checkbox" id = "geografia" name = "theme" value = "geografia">
            <label for = "geografia"> Geografia </ label>
          </ div>
          <div>
            <input type = "checkbox" id = "musica" name = "theme" value = "musica">
            <label for = "musica"> Música </ label>
          </ div>
          <div>
            <input type = "checkbox" id = "esportes" name = "theme" value = "esportes">
            <label for = "esportes"> Esportes </ label>
          </ div>
          <div>
            <input type = "checkbox" id = "ciencias" name = "theme" value = "ciencias">
            <label for = "ciencias"> Ciências </ label>
          </ div>
          <div>
            <input type = "checkbox" id = "conhecimentosgerais" name = "theme" value = "conhecimentosgerais">
            <label for = "conhecimentosgerais"> Conhecimentos Gerais </ label>
          </ div>
          <div>
            <input type = "checkbox" id = "matematica" name = "theme" value = "matematica">
            <label for = "matematica"> Matemática </ label>
          </ div>
          <div>
            <input type = "checkbox" id = "arte" name = "theme" value = "arte">
            <label for = "arte"> Arte </ label>
          </ div>
          <div>
            <input type = "checkbox" id = "biologia" name = "theme" value = "biologia">
            <label for = "biologia"> Biologia </ label>
          </ div>
          <div>
            <input type = "checkbox" id = "historia" name = "theme" value = "historia">
            <label for = "historia"> História </ label>
          </ div>
          <div>
            <input type = "checkbox" id = "games" name = "theme" value = "games">
            <label for = "games"> Games </ label>
          </ div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Criar Quiz</button>
            <hr class="my-4">
            <small class="text-muted">Ao clicar em Criar Quiz, você estará aceitando os termos de uso.</small>
        </form>
      </div>
    </div>
  </div>
';

generateTemplate($newQuizContent);

?>
