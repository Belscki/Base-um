<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="path/to/chartjs/dist/chart.umd.js"></script>
</head>
<body>
    <form action="{{route('produto.store')}}" method="post">
        @csrf
        @method('post')
{{-- Acessar Erros --}}
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>    
                @endforeach
            </ul>
        @endif  
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome" placeholder="nome">
        </div>
        <div>
            <label for="">Quantidade</label>
            <input type="text" name="quantidade" placeholder="quantidade">
        </div>
        <div>
            <label for="">Descrição</label>
            <input type="text" name="descrição" placeholder="descrição">
        </div>
        <div>
            <label for="">Preço</label>
            <input type="text" name="preço" placeholder="preço">
        </div>
        <div>
            <input type="submit" value="Salvar Produto">
        </div>
    </form>

</body>
</html>