<?php 

        require_once 'lib/conn.php';

        $sqlSelect = 'SELECT * from contato';

        $stmt = $conn -> query($sqlSelect);

        $contatos = $stmt-> fetchAll(PDO::FETCH_OBJ);






?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/9dabb0ed4f.js"></script>
</head>
<body>
    <div class="jumbotron justify-content-center">
        <a href="index.php" class="btn btn-outline-primary rounded-pill mb-3">Voltar</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>

            <?php

                foreach($contatos as $contato) {
                        ?>

                            <tr>
                                <td> <?=$contato->id?> </td>

                                <td> <?=$contato->nome?> </td>

                                <td> <?=$contato->email?> </td>

                                <td> <?=$contato->telefone?> </td>
                                </tr>
                        <?php 
                    }

                ?>
            </tbody>
        </table>
    </div>

</body>
</html>