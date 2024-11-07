<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GERAL</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .main-content {
            /* margin-left: 220px; */
            padding: 20px;
            transition: margin-left 0.3s;
        }

        body {
            background-color: #F0F0F0;
            color: black;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        * {
            box-sizing: border-box;
        }


        .navbar {
            color: white;
            display: flex;
            flex-direction: column;
            padding: 10px;
            background-color: #11A66C;
            width: 200px;
            height: 100vh;
            position: fixed;
            transition: width 0.25s, background-color 0.3s;
            overflow: hidden;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
        }

        .nav-icon {
            display: flex;
            justify-content: center;
            cursor: pointer;
            padding: 10px;
            margin-bottom: 10px;
        }

        .nav-item {
            margin: 15px 0;
            cursor: pointer;
            color: white;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            transition: transform 0.3s ease, font-size 0.3s ease, color 0.3s ease;
        }

        .nav-item:hover {
            background-color: #333;
            transform: translateX(10px);
            transition: transform 0.3s ease, background-color 0.3s ease;
            font-size: 18px;
            transform: scale(1.1);
            color: #fff;
        }

        .nav-content {
            display: flex;
            flex-direction: column;
            transition: opacity 0.3s;
        }

        .nav-hidden {
            width: 70px;
        }

        .nav-visible {
            width: 200px;
        }

        .navbar.nav-visible .nav-item {
            opacity: 1;
            transition: opacity 0.5s ease-in;
        }

        .navbar:not(:hover) .nav-content {
            opacity: 0;
        }

        .navbar:hover {
            width: 200px;
        }

        .navbar:not(:hover) {
            width: 70px;
        }


        .info-cards-container {
            display: flex;
            justify-content: space-between;
            padding: 20px 0;
        }

        .info-card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            background-color: #FFF;
            padding: 20px;
            /* border-radius: 10px; */
            width: 25vw;
            height: auto;
            text-align: center;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }


        .info-card-chart canvas {
            width: 15vw;
        }

        .positive {
            color: green;
        }

        .negative {
            color: red;
        }

        .sales-chart-container {
            margin: 5vh 5vw 5vh 5vw;
            text-align: center;
        }

        canvas {
            max-height: 420px;
            width: 100%;
        }


        .widgets {
            display: flex;
            justify-content: space-between;
            padding: 20px 0;
        }

        .pie,
        .expenses,
        .user-experience,
        .income,
        .feedback,
        .sales1,
        .complaints,
        .sales-speculation,
        .growth,
        .sales2 {
            background-color: #1f1f1f;
            padding: 10px;
            border-radius: 10px;
            width: 250px;
            height: 320px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }


        footer {
            width: 100%;
            background-color: #000000;
            color: white;
            padding: 0 0vw;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            position: relative;
            align-items: center;
        }

        footer::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0, 0, 0, 0) 5%,
                    rgba(0, 0, 0, 0.3) 20%,
                    rgba(0, 0, 0, 0.6) 30%,
                    rgba(0, 0, 0, 0.8) 40%,
                    rgba(0, 0, 0, 1) 50%,
                    rgb(0, 0, 0));
            z-index: -1;
        }

        .col {
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 1rem 1rem;
            width: 20%;
        }

        .col2,
        .col3,
        .col4 {
            background-color: #000000;
            border-radius: 2rem;
            text-align: left;
        }

        .social {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            gap: 1.25rem;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        @media screen and (max-width: 1000px) {
            .col {
                padding: 0.9rem 2.4rem;
            }
        }

        @media screen and (max-width: 700px) {
            footer {
                flex-direction: column;
                padding: 5rem 20vw;
            }

            .col {
                width: 100%;
            }
        }

        @media (max-width:930px) {
            .info-card {
                display: flex;
                flex-direction: column;
                background-color: #FFF;
                padding: 20px;
                /* border-radius: 10px; */
                width: 25vw;
                height: auto;
                text-align: center;
                align-items: center;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            }
        }

        @media (max-width: 685px) {
            .info-cards-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
                padding: 20px 0;
            }

            .info-card {
                display: flex;
                flex-direction: column;
                background-color: #FFF;
                padding: 0px;
                margin: 1vh;
                width: 50vw;
                height: auto;
                text-align: center;
                align-items: center;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            }
        }
        svg {
            width: 15px;
        }
    </style>
</head>


<body>

    {{-- {{print_r($Custos)}} --}}
    <!-- Barra de Navegación Lateral -->
    <div class="navbar" id="navbar">

        <div class="nav-icon">
            <a href="{{ route('mainpage') }}"><img
                    src="https://raichu-uploads.s3.amazonaws.com/logo_scoregroup_iRcBug.png" style="width: 50px"></a>
        </div>

        <div class="nav-content">
            <p><a href=" "> </a> </p>
            <p><a href="{{ route('mainpage') }}">HOME</a></p>
            <p><a href="{{ route('squadpage') }}">SQUADS</a></p>
        </div>

    </div>

    <div class="main-content" id="main-content">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">CPF/CNPJ</th>
                        <th scope="col">Contratacao</th>
                        <th scope="col">Modelo de contratacao</th>
                        <th scope="col">Novo modelo</th>
                        <th scope="col">Squad</th>
                        <th scope="col">Vaga</th>
                        <th scope="col">Billable</th>
                        <th scope="col">Salario</th>
                        <th scope="col">Custo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $funcionario)
                        <tr>
                            <th scope="row">{{$funcionario->id}}</th>
                            <td>{{$funcionario->nome}}</td>
                            <td>{{$funcionario->matricula}}</td>
                            <td>{{$funcionario->cpf_cnpj}}</td>
                            <td>{{$funcionario->contratacao}}</td>
                            <td>{{$funcionario->modelo_contratacao}}</td>
                            <td>{{$funcionario->novo_modelo}}</td>
                            <td>{{$funcionario->squad}}</td>
                            <td>{{$funcionario->vaga}}</td>
                            <td>{{$funcionario->billable}}</td>
                            <td>{{$funcionario->salario}}</td>
                            <td>{{$funcionario->custo}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center align-items-center text-center">
                {{ $funcionarios->links() }}
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
