<html>
<head>
</head>

<body>
    <form method="post">
        <a>Nome completo</a>
        <input type="text" id="nome" name="nome">

        <br><br>

        <a>E-mail</a>
        <input type="email" id="email" name="email">

        <br><br>

        <a>Sexo</a>
        <select name="sexo">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
            <option value="prefiroNaoDizer">Prefiro não dizer</option>
          </select>
          
        <br><br>

        <a>Curso</a>
        <select name="curso">
            <option value="programadorWeb">Programador Web</option>
            <option value="bancoDados">Banco de dados</option>
            <option value="cienciaDados">Ciência de dados</option>
        </select>
  
        <br><br>

        <a>Endereço</a>
        <input type="text" id="endereco" name="endereco">

        <br><br>
        
        <a>CEP</a>
        <input type="number" id="cep" name="cep">

        <br><br>
        
        <a>Município</a>
        <input type="text" id="municipio" name="municipio">

        <br><br>

        <?php $estados = array('AC'=>'Acre', 'AL'=>'Alagoas', 'Amapá', 'Amazonas', 'Bahia', 'Ceará', 'Distrito Federal', 'Espirito Santo', 'Goiás', 'Maranhão', 'Mato Grosso do Sul', 'Mato Grosso', 'Minas Gerais', 'Pará', 'Paraíba', 'Paraná', 'Pernambuco', 'Piauí', 'Rio de Janeiro', 'Rio Grande do Norte', 'Rio Grande do Sul', 'Rondônia', 'Roraima', 'Santa Catarina', 'São Paulo', 'Sergipe', 'Tocantins');
        ?>

        <a>Estado</a>
        <select name="estado">
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