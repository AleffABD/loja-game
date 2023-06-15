<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
            <input type="email" id="email" class="form-control" name="email" placeholder="Insira o seu email aqui">
            </div>

            <div class="form-group mt-2">
            <label for="senha">Senha</label>   
            <input type="password" id="senha" class="form-control" name="senha" placeholder="Insira a sua senha">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Logar</button>
        </form>
        </div>
    </div>
</body>
</html>