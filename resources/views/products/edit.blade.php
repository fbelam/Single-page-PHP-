<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar o produto</title>
</head>
<body>
    <title>Editar produto</title>

    <form action="{{ route ('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Noma do produto</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        </div>
        <br>
        <div>
            <label for="description">Descrição</label>
            <textarea name="description" id="description">{{ $product->description}}</textarea>
        </div>
        <br>
        <div>
            <label for="price">Preco:</label>
            <input type="number" name="price" id="price" value="{{ $product->price}}">
        </div>
        <br>
        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>