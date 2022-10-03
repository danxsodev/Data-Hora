<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hora</title>

    <style>
        span {
            display: flex;
            flex-direction: column;
            margin: 2px auto;
        }
    </style>
</head>

<body>
    <?php
        include 'index.html';

        $dia_hoje = date("d/m/Y", time());
        $hora_agora = date("h:i:s", time());

        echo "<span>";
        echo "Hoje é dia: $dia_hoje";
        echo "</span>";

        echo "<span>";
        echo "O horário de agora é: $hora_agora";
        echo "</span>";
        
    ?>
</body>
</html>