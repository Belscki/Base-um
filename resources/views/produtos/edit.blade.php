<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('produto.atualizar', ['produto' => $produto])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome" placeholder="nome" value="{{$produto->nome}}">
        </div>
        <div>
            <label for="">Quantidade</label>
            <input type="text" name="quantidade" placeholder="quantidade" value="{{$produto->quantidade}}">
        </div>
        <div>
            <label for="">Descrição</label>
            <input type="text" name="descrição" placeholder="descrição" value="{{$produto->descrição}}">
        </div>
        <div>
            <label for="">Preço</label>
            <input type="text" name="preço" placeholder="preço" value="{{$produto->preço}}">
        </div>
        <div>
            <input type="submit" value="Salvar Produto">
        </div>

    </form>
</body>
</html>