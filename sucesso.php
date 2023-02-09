<html>
<head>
</head>

<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $validou = true;

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $sexo = $_POST['sexo'];
  $curso = $_POST['curso'];
  $endereco = $_POST['endereco'];
  $cep = $_POST['cep'];
  $municipio = $_POST['municipio'];
  $estado = $_POST['estado'];

  if (empty($nome)) {
    $validou = false;
    echo "Nome não foi preenchido.";
  }
  if (empty($email)) {
    $validou = false;
    echo "E-mail não foi preenchido.";
  }
  if (empty($sexo)) {
    $validou = false;
    echo "Sexo não foi preenchido.";
  }
  if (empty($curso)) {
    $validou = false;
    echo "Curso não foi preenchido.";
  }
  if (empty($endereco)) {
    $validou = false;
    echo "Endereço não foi preenchido.";
  }
  if (empty($cep)) {
    $validou = false;
    echo "CEP não foi preenchido.";
  }
  if (empty($municipio)) {
    $validou = false;
    echo "Município não foi preenchido.";
  }
  if (empty($estado)) {
    $validou = false;
    echo "Estado não foi preenchido.";
  }

}
 if ($validou == true){
      echo "Prezado(a), seu cadastro foi realizado com sucesso! Em breve você receberá mais informações no e-mail.";
    } else {
      echo "Prezado(a), seu cadastro foi cancelado.";
    }
?>
    
</body>

</html>