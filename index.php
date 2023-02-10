<!doctype html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <br><br>
    <div class="container">
    <form class="form-control" method="post" action="validation.php">
        <h1>Cadastro</h1>

        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome completo</label>
                <input class="form-control" type="text" id="nome" name="nome">
            </div>

            <div class="col">
                <label for="email" class="form-label">E-mail</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="nome@exemplo.com">
            </div>
        </div> <!-- row -->

        <br>

        <label for="opcoesGenero" class="form-label">Gênero</label>
        <br>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="generoMasculino">Masculino</label>
            <input class="form-check-input" type="radio" name="genero" id="generoMasculino" value="Masculino" checked>
        </div>

        <div class="form-check form-check-inline">
            <label class="form-check-label" for="generoFeminino">Feminino</label>
            <input class="form-check-input" type="radio" name="genero" id="generoFeminino" value="Feminino">
        </div>

        <div class="form-check form-check-inline">
            <label class="form-check-label" for="generoOutro">Outro</label>
            <input class="form-check-input" type="radio" name="genero" id="generoOutro" value="Outro">
        </div>

        <div class="form-check form-check-inline">
            <label class="form-check-label" for="generoPrefiroNaoDizer">Prefiro não dizer</label>
            <input class="form-check-input" type="radio" name="genero" id="generoPrefiroNaoDizer" value="Prefiro não dizer">
        </div>

        <br><br>

        <label for="curso" class="form-label">Curso</label>
        <select class="form-control" name="curso">
            <option selected value="">Escolha...</option>
            <option value="programadorWeb">Programador Web</option>
            <option value="bancoDados">Banco de dados</option>
            <option value="cienciaDados">Ciência de dados</option>
        </select>

        <br>

        <div class="row">
            <div class="col">
                <label for="endereco" class="form-label">Endereço</label>
                <input class="form-control" type="text" id="endereco" name="endereco">
            </div>

            <div class="col-2">
                <label for="CEP" class="form-label">CEP</label>
                <input class="form-control" type="number" id="cep" name="cep" placeholder="89000000" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "8">
            </div>

            <div class="col-3">
                <label for="municipio" class="form-label">Município</label>
                <input class="form-control" type="text" id="municipio" name="municipio">
            </div>

            <div class="col-3">
                <label for="estado" class="form-label">Estado</label>
                <select class="form-control" name="estado">
                    <option selected value="">Escolha...</option>
                    <?php
                    $estados = array('AC'=>'Acre', 'AL'=>'Alagoas', 'AP'=>'Amapá', 'AM'=>'Amazonas', 'BA'=>'Bahia', 'CE'=>'Ceará', 'DF'=>'Distrito Federal', 'ES'=>'Espírito Santo', 'GO'=>'Goiás', 'MA'=>'Maranhão', 'MT'=>'Mato Grosso', 'MS'=>'Mato Grosso do Sul', 'MG'=>'Minas Gerais', 'PA'=>'Pará', 'PB'=>'Paraíba', 'PR'=>'Paraná', 'PE'=>'Pernambuco', 'PI'=>'Piauí', 'RJ'=>'Rio de Janeiro', 'RN'=>'Rio Grande do Norte', 'RS'=>'Rio Grande do Sul', 'RO'=>'Rondônia', 'RR'=>'Roraima', 'SC'=>'Santa Catarina', 'SP'=>'São Paulo', 'SE'=>'Sergipe', 'TO'=>'Tocantins');
                    foreach ($estados as $sigla => $estado) {
                        ?> <option value="<?php echo $sigla; ?>"><?php echo $estado; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div> <!-- row -->

        <br>

        <button type="reset" class="btn btn-danger">Limpar</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#caixaConfirmacaoSalvar">Salvar</button>

        <div class="modal fade" id="caixaConfirmacaoSalvar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja confirmar o cadastro?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Clicar em sim salva o seu cadastro.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Sim</button>
            </div>
            </div>
        </div>
        </div>
    </form>
    </div>
</body>

</html>