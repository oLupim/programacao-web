<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula4</title>
</head>
<body>
    <h1>Listagem de Clientes</h1>
    <table>
        <tr>
            <td>Nome</td>
            <td>CPF</td>
        </tr>

        <!-- inicio do foreach para exibir a listagem dos clientes-->
        <?php
            foreach($listaDeClientes as $cliente):
        ?>

        <tr>
            <td><?php echo $cliente["nome"];?></td>
            <td><?php echo $cliente["cpf"];?></td>
        </tr>

        <?php
            endforeach;
        ?>
    </table>
</body>
</html>

<!-- <?php

    var_dump($listaDeClientes)
?> -->