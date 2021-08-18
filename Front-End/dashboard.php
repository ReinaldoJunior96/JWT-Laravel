<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php
    session_start();
    /* Cabeçalho */
    $url = 'http://localhost:8000/api/produtos';
    $token = $_SESSION['token'];
    #$cabecalho =    array('Content-Type: application/json', $authorization);

    $ch = curl_init($url);
    /* Request */
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $token
    ));
    //curl_setopt($ch, CURLOPT_POSTFIELDS,     $campos);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    $resposta = curl_exec($ch);
    curl_close($ch);
    $dados = json_decode($resposta);
    ?>
</head>

<body>
<div class="container mt-5 col-4">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="#">Listar Produtos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="produto/form-cadastro.php">Novo Produto</a>
        </li>
    </ul>
    <div class="shadow p-3 mb-5 bg-white rounded">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($dados as $dado): ?>
                <tr>
                    <th scope="row"><?= $dado->id ?></th>
                    <td><?= $dado->prod_name ?></td>
                    <td><?= $dado->description ?></td>
                    <td><a href="produto/edit-form-prod.php?product=<?= $dado->id ?>">Edit</a></td>
                    <td>
                        <form method="post" action="">
                            <input type="hidden" value="<?= $dado->id ?>">
                            <button type="submit">Click Me!</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
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
