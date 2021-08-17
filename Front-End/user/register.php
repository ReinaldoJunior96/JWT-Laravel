<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.css"/>
</head>

<body>
<div class="container mt-5 col-4">
    <div class="shadow p-3 mb-5 bg-white rounded">
        <form method="POST" action="../back-resquest/post-api.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <div>
                <button type="submit" class="btn btn-primary col-4">Cadastrar</button>
                <a href="../index.php" class="badge badge-light float-right mt-2">Fazer login</a>
            </div>
        </form>
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
