<!doctype html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  <form class="form-control">
    <label for="alertaRetornoValidacao" class="form-label">Dados cadastrados</label>
      <div class="alert alert-dark" role="alert" name="alertaRetornoValidacao">
        <?php echo exibeRetornoValidacao(); ?>
      </div>
  </form>
</body>
</html>

<?php
function exibeRetornoValidacao() {
  $validou = true;

  if (isset($_POST['nome'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $nome      = $_POST['nome'];
      $email     = $_POST['email'];
      $sexo      = $_POST['sexo'];
      $curso     = $_POST['curso'];
      $endereco  = $_POST['endereco'];
      $cep       = $_POST['cep'];
      $municipio = $_POST['municipio'];
      $estado    = $_POST['estado'];
  
      if (empty($nome)) {
        $validou = false;
        echo "Nome não foi preenchido.<br>";
      }
      if (empty($email)) {
        $validou = false;
        echo "E-mail não foi preenchido.<br>";
      }
      if (empty($sexo)) {
        $validou = false;
        echo "Sexo não foi preenchido.<br>";
      }
      if (empty($curso)) {
        $validou = false;
        echo "Curso não foi preenchido.<br>";
      }
      if (empty($endereco)) {
        $validou = false;
        echo "Endereço não foi preenchido.<br>";
      }
      if (empty($cep)) {
        $validou = false;
        echo "CEP não foi preenchido.<br>";
      }
      if (empty($municipio)) {
        $validou = false;
        echo "Município não foi preenchido.<br>";
      }
      if (empty($estado)) {
        $validou = false;
        echo "Estado não foi preenchido.<br>";
      }
    }

    if ($validou){
      return "Prezado(a) ".$nome.", seu cadastro foi realizado com sucesso! Em breve você receberá mais informações no e-mail ".$email."";
    } else {
      return "Prezado(a) ".$nome.", seu cadastro foi cancelado.";
    }
  }
}
?>