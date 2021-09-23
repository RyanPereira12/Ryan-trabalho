<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

        <link href="../CSS/form.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="box">
            <form class="row g-3" method="POST" action="../php/cadastrar.php">
                <h2>Formulario Cliente</h2>
                <div class="col-md-6">
                    <label for="text"><b>Nome Completo</label></b>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="digite seu nome" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="genero"><b>Gênero</label></b>
                <select class="form-select" name="genero" aria-label="Default select example">
                    <option value="1">masculino</option>
                    <option value="2">feminino</option>
                    <option value="3">outros</option>
                  </select>
                </div>
                  <br>
                  <div class="col-md-6">
                    <label for="text"><b>Usuario</label></b>
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="digite seu @" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="text"><b>Email</label></b>
                    <input type="text" name="email" id="email" class="form-control" placeholder="digite seu email" required>
                </div>
                <br>
                <div class="col-md-2">
                    <label for="password"><b>Senha</label></b>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="digite sua senha" required>
                </div>
                <br>
                <div class="col-md-2">
                    <label for="password"><b>Confirmar Senha</label></b>
                    <input type="password" name="senha" id="confirme senha" class="form-control" placeholder="confirmar senha" required>
                </div>
                <br>
                <div class="col-md-2">
                    <label for="date"><b>Data de Nascimento</label></b>
                    <input type="date" name="datan" id="datanascimento" class="form-control"  required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="number"><b>CPF</label></b>
                    <input type="number" name="cpf" id="cpf"class="form-control" placeholder="digite seu cpf" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="tel"><b>Telefone</label></b>
                    <input type="tel" name="telefone" id="telefone" class="form-control" placeholder="digite seu telefone" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="text"><b>Endereço</label></b>
                    <input type="text" name="endereço" id="endereço" class="form-control" placeholder="digite seu endereço"  required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="number"><b>CEP</label></b>
                    <input type="number" name="cep" id="cep" class="form-control" placeholder="digite seu cep" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="text"><b>Estado</label></b>
                    <input type="text" name="estado" id="estado" class="form-control" placeholder="digite seu estado" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="text"><b>Cidade</label></b>
                    <input type="text" name="cidade" id="cidade" class="form-control" placeholder="digite sua cidade" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="text"><b>Rua</label></b>
                    <input type="text" name="rua" id="rua" class="form-control" placeholder="digite sua rua" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="number"><b>Numero</label></b>
                    <input type="number" name="numero" id="numero" class="form-control" placeholder="digite seu nomero" required>
                </div>
                <br>
                <div class="col-md-6">
                    <label for="text"><b>Complemento</label></b>
                    <input type="text" name="complemento" id="complemento" class="form-control" placeholder="cond/bloco/apart/andar/numero" required>
                </div>
                <br>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary" onclick="Enviar()" id="button">Enviar</button>
                </div>
            </form>
        </div>
    </div>
<script src="../Javascript/form.js"></script>
</body>
</html>