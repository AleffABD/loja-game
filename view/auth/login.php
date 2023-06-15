<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <link type="text/css" rel="stylesheet" href="./login.css">
    <title>Games</title>
</head>
<body>
    <div class="container">
        <div class="bg-white rounded mt-3 p-3">
        <form action="../../controller/auth/login.php" method="post">
            <h2>Login</h2>
            <div class="form-group">
            <label for="email">Email</label>   
            <input type="email" required id="email" class="form-control" name="email" placeholder="Insira o seu email aqui">
            </div>

            <div class="form-group mt-2">
            <label for="senha">Senha</label>   
            <input type="password" required id="senha" class="form-control" name="senha" placeholder="Insira a sua senha">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Logar</button>
        </form>
        </div>
    </div>
    <?php
        if(isset($_GET["error"])) {
            echo '<script type="text/javascript">toastr.error("Usuário ou senha incorretos")</script>';
        }

        if(isset($_GET["emailError"])) {
            echo '<script type="text/javascript">toastr.error("Email mal formatado")</script>';
        }
    ?>
</body>
</html>