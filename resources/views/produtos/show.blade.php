<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Detalhes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Unialfa</a>
        </div>
    </nav>
    <div class="container">
        <h1 style="text-align:center;">Lista de Produtos</h1>
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Produto: {{ $produto->nome }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="cart-text"><strong>ID:</strong> {{ $produto->id }}</p>
                        <p class="card-text"><strong>Nome:</strong> {{ $produto->nome }}</p>
                        <p class="card-text"><strong>Categoria:</strong> {{ $produto->categoria }}</p>
                        <p class="card-text"><strong>Descrição:</strong> {{ $produto->descricao }}</p>
                        <p class="card-text"><strong>Valor:</strong> {{ $produto->valor }}</p>
                        <br>
                        <a class="btn btn-success" href="{{ route('produtos.index') }}">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>