<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/exemplo.css">
    <style>
        nav {
            margin-bottom: 5vh;
            background-color: black;
        }

        .main-container {
            margin-top: 2vh;
        }

        /* Estilização do título */
        .form-container h1 {
            text-align: center;
            color: #000;
            position: relative;
        }

        .form-container h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 285px;
            height: 4px;
            background: linear-gradient(90deg, #00eb14d3, #027a0cd3);
            border-radius: 2px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Urbus
            </a>
        </div>
    </nav>

    <div class="main-container">
        <div class="form-container">
            <h1 id="teste">Dados Do Form</h1>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $endereco = $_POST["endereco"];
                $datanasc = $_POST["datanasc"];
                $arq = $_FILES["arq"]["name"];
                $cpf = $_POST["CPF"];

                // Formatar para dd-mm-yyyy
                $dataFormatada = date("d-m-Y", strtotime($datanasc));

                // Verifica se o checkbox foi marcado
                if (isset($_POST["manterLogin"])) {
                    $manterLogin = "Sim";
                    $mensagemLogin = "Manter login";
                } else {
                    $manterLogin = "Não";
                    $mensagemLogin = "Não manter login";
                }
                echo "\t<p><b>Email:</b> $email</p>\n";
                echo "\t<p><b>Senha:</b> $senha</p>\n";
                echo "\t<p><b>Endereço:</b> $endereco</p>\n";
                echo "\t<p><b>Data Nasc.:</b> $dataFormatada</p>\n";
                echo "\t<p><b>Arquivo:</b> $arq</p>\n";
                echo "\t<p><b>CPF:</b> $cpf</p>\n";
                echo "\t<p><b>Manter Login:</b> $manterLogin</p>\n";
            }
            ?>
        </div>
    </div>
</body>

</html>