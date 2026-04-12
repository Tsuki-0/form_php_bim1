<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urbus</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/exemplo.css">
    <style>
        /* Efeito de hover para realçar a sombra */
        .form-container:hover {
            box-shadow:
                0 25px 50px rgba(0, 0, 0, 0.15),
                0 15px 30px rgba(0, 0, 0, 0.12),
                0 0 0 1px rgba(255, 255, 255, 0.15) inset,
                0 0 25px rgba(0, 0, 0, 0.25);
            transform: translateY(-2px);
            transition: all 0.7s ease;
        }

        /* Estilização do título */
        .form-container h2 {
            text-align: center;
            color: #333;
            font-weight: 600;
            font-size: 2rem;
            position: relative;
        }

        .form-container h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 65px;
            height: 3px;
            background: linear-gradient(90deg, #00eb14d3, #027a0cd3);
            border-radius: 2px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Urbus
            </a>
        </div>
    </nav>

    <div class="main-container">
        <div class="form-container">
            <h2>Urbus</h2>
            <form action="dados.php" method="post" enctype="multipart/form-data" class="row g-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="seuemail@email.com" required>
                </div>
                <div class="col-md-6">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="********" required>
                </div>
                <div class="col-12">
                    <label for="endereco" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Bairro, Rua 1234" required>
                </div>
                <div class="col-md-2">
                    <label for="arq" class="form-label">Imagem</label>
                    <input type="image" class="form-control" id="arq" name="arq" accept="image/*" required
                        onchange="previewImage(event)">
                    <img id="preview" src="#" alt="Preview da Imagem" style="display:none; max-width:300px;">
                </div>
                <div class="col-md-4">
                    <label for="datanasc" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="datanasc" name="datanasc" min="1906-01-01" max="2012-12-12" required>
                </div>
                <div class="col-md-6">
                    <label for="CPF" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="doc" name="CPF" placeholder="123.456.789-00" required>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="manterLogin" name="manterLogin" value="Manter">
                        <label class="form-check-label" for="manterLogin">
                            Manter login neste dispositivo
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cadastrar-se</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>


    <script>
        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function() {
                const dataURL = reader.result;
                const output = document.getElementById('preview');
                output.src = dataURL;
                output.style.display = 'block';
            };

            if (input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>