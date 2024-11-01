<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            text-align: center;
            justify-content: center
        }
        canvas{
            width: 1vw;
        }
        .graficos{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            /* grid-auto-columns: 25vw; */
            width: 25vw;
        }

    </style>
</head>
<body>
    <div>
    <h1>Exemplos com Quantidade e Preço</h1>
    <form action="{{route('produto.create')}}">
        <input type="submit" value="Criar Produto">
    </form>
</div>
    <div style="display: none">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>nome</th>
                <th>quantidade</th>
                <th>descrição</th>
                <th>Preço</th>
                <th>Editar</th>
            </tr>
            @foreach($produtos as $produto)
            <tr>
                <td>{{$produto->id}}</td>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->quantidade}}</td>
                <td>{{$produto->descrição}}</td>
                <td>{{$produto->preço}}</td>
                <td>
                    <a href="{{route('produto.editar', ['produto' => $produto])}}">Editar</a>
                </td>
                <td>
                    <form action="{{route('produto.destruir', ['produto' => $produto])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Deletar">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="graficos">
        <canvas id="CanvaBarras"></canvas>
        <canvas id="CanvaBarras1"></canvas>
        <canvas id="CanvaBarras2"></canvas>
    </div>
    <h1></h1>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('CanvaBarras');
        const ctx1 = document.getElementById('CanvaBarras1');
        const ctx2 = document.getElementById('CanvaBarras2');

        const dataDados = @json($quantidades);
        const dataNome = @json($nome);
        const dataPreco = @json($preco);
        
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: dataNome,
                datasets: [{
                    label: 'Quantidade Frutas',
                    data: dataDados,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: dataNome,
                datasets: [{
                    label: 'Quantidade Frutas',
                    data: dataDados,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        new Chart(ctx2, {
            type: 'line',
            data: {
                datasets: [{
                    type: 'line',
                    label: 'Quantidade',
                    data: dataDados
                    }, {
                    type: 'line',
                    label: 'Preços',
                    data: dataPreco,
        }],
        labels: dataNome
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>