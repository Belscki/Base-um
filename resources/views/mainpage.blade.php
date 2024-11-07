<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GERAL</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .main-content {
            margin-left: 220px;
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
    </style>
</head>


<body>

    {{-- {{print_r($Custos)}} --}}
    <!-- Barra de Navegación Lateral -->
    <div class="navbar" id="navbar">

        <div class="nav-icon">
            <a href="{{route('mainpage')}}"><img
                    src="https://raichu-uploads.s3.amazonaws.com/logo_scoregroup_iRcBug.png" style="width: 50px"></a>
        </div>

        <div class="nav-content">
            <p><a href=" "> </a> </p>
            <p><a href="{{route('mainpage')}}">HOME</a></p>
            <p><a href="{{route('squadpage')}}">SQUADS</a></p>
        </div>

    </div>

    <div class="main-content" id="main-content">
        <div class="info-cards-container" id="info-cards-container">
            <div>
            </div>

            <div class="info-card">
                <div>
                    <h2>Custo Total</h2>
                    <p class="negative">Inserir valor via Fluxo</p>
                </div>
                <div class="info-card-chart">
                    <canvas id="CanvaCustoTotal"></canvas>
                </div>
            </div>

            <div class="info-card">
                <div>
                    <h2>Imposto</h2>
                    <p class="negative">Inserir valor via Fluxo</p>
                </div>
                <div class="info-card-chart">
                    <canvas id="CanvaImposto"></canvas>
                </div>
            </div>

            <div></div>
        </div>

        @foreach ($funcionarios as $funcionario)
            <li>{{$funcionario->nome}}</li>
        @endforeach

        <div class="sales-chart-container" id="sales-chart-container">
            <div class="sales-line-chart">
                <h2>CUSTO TOTAL MES</h2>
                <canvas id="CanvaCustoTotalMes"></canvas>
            </div>
        </div>

        <div class="info-cards-container" id="info-cards-container">
            <div></div>

            <div class="info-card">
                <div>
                    <h2>Receita</h2>
                    <p class="positive">Inserir valor via Fluxo</p>
                </div>
                <div class="info-card-chart">
                    <canvas id="CanvaReceitaTotal"></canvas>
                </div>
            </div>

            <div class="info-card">
                <div>
                    <h2>Receita X Custo Geral</h2>
                    <p class="negative">Inserir valor via Fluxo</p>
                </div>
                <div class="info-card-chart">
                    <canvas id="CanvaReceitaCustoGeral"></canvas>
                </div>
            </div>

            <div></div>
        </div>

        <div class="sales-chart-container" id="sales-chart-container">
            <div class="sales-line-chart">
                <h2>Receita X Custo Geral (Mes)</h2>
                <canvas id="CanvaReceitaCustoMes"></canvas>
            </div>
        </div>
    </div>
</body>
<script>
    let navVisible = true;

    document.addEventListener('DOMContentLoaded', function () {
        const navbar = document.getElementById('navbar');
        const mainContent = document.getElementById('main-content');
        navbar.classList.add('nav-visible');
        mainContent.style.marginLeft = '70px';

        function toggleNav() {
            navVisible = !navVisible;
            if (navVisible) {
                navbar.classList.remove('nav-hidden');
                navbar.classList.add('nav-visible');
                mainContent.style.marginLeft = '70px';
            } else {
                navbar.classList.remove('nav-visible');
                navbar.classList.add('nav-hidden');
                mainContent.style.marginLeft = '220px';
            }
        }

        navbar.addEventListener('mouseenter', toggleNav);
        navbar.addEventListener('mouseleave', toggleNav);
    });


    //Custo Total Mes
    const CustoTotalMes = document.getElementById('CanvaCustoTotalMes').getContext('2d');
    const CanvaCustoTotalMes = new Chart(CustoTotalMes, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
            ,
            datasets: [{
                label: 'Custos/Mes',
                data: [800, 800, 1400, 600, 1300, 1000, 1000, 700, 1000, 400, 600, 300],
                backgroundColor: '#11A66C'
            }]
        }
    });

    //CanvaReceitaCustoGeral
    var windowWidth = window.innerWidth;

    if (windowWidth >= 1320) {
        const CustoReceita2 = document.getElementById('CanvaReceitaCustoGeral').getContext('2d');
        const CanvaReceitaCustoGeral = new Chart(CustoReceita2, {
            type: 'bar',
            data: {
                labels: ['Receita X Custo'],
                datasets: [{
                    label: 'Receita',
                    data: [12000],
                    backgroundColor: '#11A66C'
                }, {
                    label: 'Custo',
                    data: [{{ $custoTotal }}],
                    backgroundColor: '#FF2C2C'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,  // Não começar no zero
                        ticks: {
                            stepSize: 1000, // Define o intervalo entre as linhas (por exemplo, cada 1000 unidades)
                        }
                    }
                }
            }
        });
    } else {
        const CustoReceita2 = document.getElementById('CanvaReceitaCustoGeral').getContext('2d');
        const CanvaReceitaCustoGeral = new Chart(CustoReceita2, {
            type: 'doughnut',
            data: {
                labels: ['Receita', 'Custo'],
                datasets: [{
                    data: [12000, 10000],
                    backgroundColor: ['#11A66C', '#FF2C2C']
                }]
            },
            options: {
                responsive: true,
            }
        });
    }

    //Custo Total
    const CanvaCusto = document.getElementById('CanvaCustoTotal').getContext('2d');
    const CanvaCustoTotal = new Chart(CanvaCusto, {
        type: 'doughnut',
        data: {
            labels: ['Score', 'Global'],
            datasets: [{
                data: [7000, 3000],
                backgroundColor: ['#11A66C', '#FFB400']
            }]
        },
        options: {
            legend: {
                display: false
            },
            tooltips: {
                enabled: false
            },
        }
    });

    //Receita Total
    const CanvaReceita = document.getElementById('CanvaReceitaTotal').getContext('2d');
    const CanvaReceitaTotal = new Chart(CanvaReceita, {
        type: 'doughnut',
        data: {
            labels: ['Score', 'Global'],
            datasets: [{
                data: [7000, 3000],
                backgroundColor: ['#11A66C', '#FFB400'
                ]
            }]
        },
        options: {
            legend: {
                display: false
            },
            tooltips: {
                enabled: false
            },
        }
    });

    //Imposto
    const CanvaImposto = document.getElementById('CanvaImposto').getContext('2d');
    const CanvaImpostoTotal = new Chart(CanvaImposto, {
        type: 'doughnut',
        data: {
            labels: ['Custo Total', 'Imposto'],
            datasets: [{
                data: [9000, 1000],
                backgroundColor: ['#11A66C', '#FF2C2C'
                ]
            }]
        },
        options: {
            legend: {
                display: false
            },
            tooltips: {
                enabled: false
            },
            responsive: true
        }
    });

    //Receita X Custo Mes
    const CanvarReceitaCustoMensal = document.getElementById('CanvaReceitaCustoMes').getContext('2d');
    const CanvaReceitaCustoMes = new Chart(CanvarReceitaCustoMensal, {
        type: 'line',
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
            ,
            datasets: [{
                label: 'Custos',
                data: [800, 800, 1400, 600, 1300, 1000, 1000, 700, 1000, 400, 600, 300],
                borderColor: 'rgba(255, 44, 44, 1)',
                backgroundColor: 'rgba(255, 44, 44, 0.20)',
                fill: true,
                borderWidth: 1,
            }, {
                label: 'Receita',
                data: [900, 900, 1500, 700, 1400, 1100, 900, 900, 1100, 500, 700, 400],
                borderColor: 'rgba(35, 196, 134, 1)',
                backgroundColor: 'rgba(35, 196, 134, 0.20)',
                fill: true,
                borderWidth: 1,
            }]
        }
    });


    //Atualiza a pagina ao Mudar a Resolução
    window.addEventListener('resize', function () {
        location.reload(); // Isso recarrega a página (simula o F5)
    });
</script>

</html>