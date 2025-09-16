<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Produto</title>
</head>
<body>
    <h1>Produto</h1>

    <form action="{{ route('products.store') }}" method="POST" >
        @csrf

        <div>
            <label for="name">Nome do produto:</label><br>
            <input type="text" name="name" id="name" required>
        </div>
                <div>
            <label for="description">Descrição do produto:</label><br>
            <textarea name="description" id="description"></textarea>
        </div><br>
                <div>
            <label for="price">Preço do produto:</label><br>
            <input type="number" step="0.01" name="price" id="price" required>
        </div><br>

        <button type="submit">Salvar produto</button>  
    </form>
</body>
</html>