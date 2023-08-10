<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./cadastro.css">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <title>Games</title>
</head>
<body>
    <div class="container">
        <h3>Upload de Jogo</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome do jogo</label>
                <input id='nome' type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input id='preco' type="number" class="form-control">
            </div>
            <div class="form-group">
                <label for="console">Console</label>
                <select class="form-select" name="console" id="console">
                    <option value=""></option>
                    <option value="1">Playstation 4</option>
                    <option value="2">Playstation 3</option>
                    <option value="3">PC</option>
                    <option value="4">XBOX 360</option>
                    <option value="5">XBOX ONE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea class="form-control" name="" id="descricao"></textarea>
            </div>
            <div class="form-group">
                <label for="capa">Capa</label>
                <input type="file" class="form-control" id="capa">
            </div>

            <button type="submit" class="btn btn-success mt-3">Enviar</button>
        </form>
    </div>
    

</body>
</html>