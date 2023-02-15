<!doctype html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  <br><br>
  <div class="container">
    <form class="form-control">
      <label for="formValidationAlert" class="form-label">Dados cadastrados</label>
        <div class="alert alert-dark" role="alert" name="formValidationAlert">
          <?php echo formValidation(); ?>
        </div>
        <div class="alert alert-dark" role="alert" name="registerAlert">
          <?php echo resultadoCadastro(); ?>
        </div>
    </form>
  </div>
</body>
</html>

<?php

function formValidation() {
  $GLOBALS['requisicaoValida'] = true;

  if (isset($_POST['nome'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $GLOBALS['nome']  = $_POST['nome'];
      $GLOBALS['email'] = $_POST['email'];
      $genero    = $_POST['genero'];
      $curso     = $_POST['curso'];
      $endereco  = $_POST['endereco'];
      $cep       = $_POST['cep'];
      $municipio = $_POST['municipio'];
      $estado    = $_POST['estado'];

      if (empty($GLOBALS['nome'])) {
        $GLOBALS['requisicaoValida'] = false;
        echo "Nome completo não foi preenchido.<br>";
      }
      if (empty($GLOBALS['email'])) {
        $GLOBALS['requisicaoValida'] = false;
        echo "E-mail não foi preenchido.<br>";
      }
      if (empty($genero)) {
        $GLOBALS['requisicaoValida'] = false;
        echo "Gênero não foi preenchido.<br>";
      }
      if (empty($curso)) {
        $GLOBALS['requisicaoValida'] = false;
        echo "Curso não foi preenchido.<br>";
      }
      if (empty($endereco)) {
        $GLOBALS['requisicaoValida'] = false;
        echo "Endereço não foi preenchido.<br>";
      }
      if (empty($cep)) {
        $GLOBALS['requisicaoValida'] = false;
        echo "CEP não foi preenchido.<br>";
      }
      if (empty($municipio)) {
        $GLOBALS['requisicaoValida'] = false;
        echo "Município não foi preenchido.<br>";
      }
      if (empty($estado)) {
        $GLOBALS['requisicaoValida'] = false;
        echo "Estado não foi preenchido.<br>";
      }
      if ($GLOBALS['requisicaoValida'] == true){
        echo "Todos os campos foram preenchidos.";
      }
    }
  }
}

function resultadoCadastro() {
  if ($GLOBALS['requisicaoValida'] == true) {
    echo "Prezado(a) ".$GLOBALS['nome'].", seu cadastro foi realizado com sucesso! Em breve você receberá mais informações no e-mail ".$GLOBALS['email']."";
  } else {
    if ($GLOBALS['nome'] != null) {
      echo "Prezado(a) ".$GLOBALS['nome'].", seu cadastro foi cancelado.";
    } else {
      echo "Prezado(a), seu cadastro foi cancelado.";
    }
  }
}

?>