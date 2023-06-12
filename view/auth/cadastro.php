<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <link type="text/css" rel="stylesheet" href="./cadastro.css">
    <title>Games</title>
</head>
<body>
    <div class="container">
        <div class="bloco--cadastro">
            <form>
                <h2>Cadastro</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name='email' class="form-control" placeholder="Insira o seu email" id="email">
                </div>

                <div class="form-group mt-2">
                    <label for="senha">Senha</label>
                    <input type="password" name='senha' class="form-control" placeholder="Insira uma senha" id="senha">
                </div>

                <div class="form-group mt-2">
                    <label for="senha-confirm">Confirme senha</label>
                    <input type="password" name='senha_confirm' class="form-control" placeholder="Confirme a sua senha" id="senha-confirm">
                </div>

                <button type="submit" class="btn btn-success mt-2">Cadastrar</button>
            </form>
        </div>

    </div>
</body>
</html>