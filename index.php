<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <form method="post" action="sucesso.php">
        <a>Nome completo</a>
        <input required type="text" id="nome" name="nome">

        <br><br>

        <a>E-mail</a>
        <input required type="email" id="email" name="email">

        <br><br>

        <a>Sexo</a>
        <select required name="sexo">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
            <option value="prefiroNaoDizer">Prefiro não dizer</option>
          </select>
          
        <br><br>

        <a>Curso</a>
        <select required name="curso">
            <option value="programadorWeb">Programador Web</option>
            <option value="bancoDados">Banco de dados</option>
            <option value="cienciaDados">Ciência de dados</option>
        </select>
  
        <br><br>

        <a>Endereço</a>
        <input required type="text" id="endereco" name="endereco">

        <br><br>
        
        <a>CEP</a>
        <input required type="number" max="7" minlength="7" id="cep" name="cep">

        <br><br>
        
        <a>Município</a>
        <input required type="text" id="municipio" name="municipio">

        <br><br>

        <?php $estados = array('AC'=>'Acre', 'AL'=>'Alagoas', 'Amapá', 'Amazonas', 'Bahia', 'Ceará', 'Distrito Federal', 'Espirito Santo', 'Goiás', 'Maranhão', 'Mato Grosso do Sul', 'Mato Grosso', 'Minas Gerais', 'Pará', 'Paraíba', 'Paraná', 'Pernambuco', 'Piauí', 'Rio de Janeiro', 'Rio Grande do Norte', 'Rio Grande do Sul', 'Rondônia', 'Roraima', 'Santa Catarina', 'São Paulo', 'Sergipe', 'Tocantins');
        ?>

        <a>Estado</a>
        <select required name="estado">
        <?php
        foreach ($estados as $k=> $estado) {
            ?> <option value="<?php echo $k; ?>"><?php echo $estado; ?></option> 
        <?php } ?> 
        ?>
        </select>

        <br><br>

        <button type="reset">Limpar</button>
        <button type="submit">Enviar</button>

    </form>

</body>

</html>