<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.css"/>
    <?php

    /* Cabeçalho */
    $url = 'http://localhost:8000/users';
    $cabecalho = array('Content-Type: application/json', 'Accept: application/json');
    $ch = curl_init();
    /* Request */
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $cabecalho);
    //curl_setopt($ch, CURLOPT_POSTFIELDS,     $campos);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $resposta = curl_exec($ch);
    curl_close($ch);
    $dados = json_decode($resposta);
    ?>

</head>

<body>
<div class="container mt-5">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link active" href="#">Alunos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Professores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Turmas</a>
        </li>
    </ul>
</div>
<div class="container mt-5">
    <form action="POSTS/aluno_post.php" method="POST" class="form-inline">
        <div class="form-group mb-2">
            <label for="inputPassword2" class="sr-only">Nome</label>
            <input type="text" name="user" class="form-control" id="inputPassword2" placeholder="Name">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">E-mail</label>
            <input type="email" name="email" class="form-control" id="inputPassword2" placeholder="E-mail">
        </div>
        <div class="form-group mb-2">
            <label for="inputPassword2" class="sr-only">Senha</label>
            <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary mb-2 ml-3">Cadastrar</button>
    </form>
</div>
<div class="container">
    <div class="container mt-5">
        <table id="example" class="table table-sm exo text-center ">
            <thead class="bg-shadow-it bg-table">
            <tr class="text-dark">
                <th class="">Nome</th>
                <th class="">E-mail</th>
                <th class="">Endereço</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>
