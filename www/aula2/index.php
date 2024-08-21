<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP - Aula02</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Profissão</th>
            <th>Cidade</th>
        </tr>
        <?php 
        $pessoas = [
            [
                "Nome" => "Gustavo",
                "Idade" => 19,
                "Profissao" => "Dev",
                "Cidade" => "Praia Grande SC"
            ],
            [
                "Nome" => "Lucas",
                "Idade" => 32,
                "Profissao" => "DevSenior",
                "Cidade" => "Torres RS"
            ],
            [
                "Nome" => "Filipe",
                "Idade" => 22,
                "Profissao" => "DevPelo",
                "Cidade" => "Sombrio SC"
            ],
            [
                "Nome" => "Kaue",
                "Idade" => 20,
                "Profissao" => "DevJunior",
                "Cidade" => "Passo de Torres SC"
            ],
        ];

        foreach ($pessoas as $key => $pessoa): ?>
        <tr>
            <td><?php echo $pessoa["Nome"] ?></td>
            <td><?php echo $pessoa["Idade"] ?></td>
            <td><?php echo $pessoa["Profissao"] ?></td>
            <td><?php echo $pessoa["Cidade"] ?></td>
        </tr>

        <?php 
            endforeach;
        ?>
    </table>
</body>
</html>