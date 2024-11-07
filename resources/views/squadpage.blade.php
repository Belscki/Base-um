<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SQUADS</title>
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

        <div class="sales-chart-container" id="sales-chart-container">
            <div class="sales-line-chart">
                <h2>CUSTO POR SQUAD TOTAL MES</h2>
                <canvas id="CanvaCustoTotalMes"></canvas>
            </div>
        </div>
        <!-- SQUAD 1 -->
        <div class="info-cards-container" id="info-cards-container">
            <div></div>
            <div class="info-card">
                <div>
                    <a href="{{route('squadpage.edit')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width:20px">
                            <path
                                d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                        </svg>
                    </a>
                    <h2>SQUAD 1<br>CUSTO</h2>
                </div>
                <p class="negative">Inserir valor via Fluxo</p>
            </div>
            <div class="info-card">
                <div>
                    <h2>SQUAD 1<br>Receita</h2>
                </div>
                <p class="positive">Inserir valor via Fluxo</p>
            </div>
            <div class="info-card">
                <canvas id="CanvaReceitaCustoGeral"></canvas>
            </div>
            <div></div>
        </div>
        <!-- SQUAD 2 -->
        <div class="info-cards-container" id="info-cards-container">
            <div></div>
            <div class="info-card">
                <div>
                    <a href="{{route('squadpage.edit')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width:20px">
                            <path
                                d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                        </svg>
                    </a>
                    <h2>SQUAD 2<br>CUSTO</h2>
                </div>
                <p class="negative">Inserir valor via Fluxo</p>
            </div>
            <div class="info-card">
                <div>
                    <h2>SQUAD 2<br>Receita</h2>
                </div>
                <p class="positive">Inserir valor via Fluxo</p>
            </div>
            <div class="info-card">
                <canvas id="CanvaReceitaCustoGeral2"></canvas>
            </div>
            <div></div>
        </div>
        <!-- SQUAD 3 -->
        <div class="info-cards-container" id="info-cards-container">
            <div></div>
            <div class="info-card">
                <div>
                    <a href="{{route('squadpage.edit')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width:20px">
                            <path
                                d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                        </svg>
                    </a>
                    <h2>SQUAD 3<br>CUSTO</h2>
                </div>
                <p class="negative">Inserir valor via Fluxo</p>
            </div>
            <div class="info-card">
                <div>
                    <h2>SQUAD 3<br>Receita</h2>
                </div>
                <p class="positive">Inserir valor via Fluxo</p>
            </div>
            <div class="info-card">
                <canvas id="CanvaReceitaCustoGeral3"></canvas>
            </div>
            <div></div>
        </div>
        <!-- SQUAD 4 -->
        <div class="info-cards-container" id="info-cards-container">
            <div></div>
            <div class="info-card">
                <div>
                    <a href="{{route('squadpage.edit')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width:20px">
                            <path
                                d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                        </svg>
                    </a>
                    <h2>SQUAD 4<br>CUSTO</h2>
                </div>
                <p class="negative">Inserir valor via Fluxo</p>
            </div>
            <div class="info-card">
                <div>
                    <h2>SQUAD 4<br>Receita</h2>
                </div>
                <p class="positive">Inserir valor via Fluxo</p>
            </div>
            <div class="info-card">
                <canvas id="CanvaReceitaCustoGeral4"></canvas>
            </div>
            <div></div>
        </div>
        <!-- SQUAD 5 -->
        <div class="info-cards-container" id="info-cards-container">
            <div></div>
            <div class="info-card">
                <div>
                    <a href="{{route('squadpage.edit')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width:20px">
                            <path
                                d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                        </svg>
                    </a>
                    <h2>SQUAD 5<br>CUSTO</h2>
                </div>
                <p class="negative">Inserir valor via Fluxo</p>
            </div>
            <div class="info-card">
                <div>
                    <h2>SQUAD 5<br>Receita</h2>
                </div>
                <p class="positive">Inserir valor via Fluxo</p>
            </div>
            <div class="info-card">
                <canvas id="CanvaReceitaCustoGeral5"></canvas>
            </div>
            <div></div>
        </div>

        <div class="info-cards-container" id="info-cards-container">
            <div></div>
            <a href="{{route('squadpage.add')}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                    style="width: 20px; background-color: rgba(59, 188, 255, 1);"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path
                        d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                </svg>
            </a>
            <div></div>
        </div>

    </div>
</body>
<script>
    //Atualiza a pagina ao Mudar a Resolução
    window.addEventListener('resize', function () {
        location.reload(); // Isso recarrega a página (simula o F5)
    });

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


    //Custo por SQUAD Total Mes
    const CustoTotalMes = document.getElementById('CanvaCustoTotalMes').getContext('2d');
    const CanvaCustoTotalMes = new Chart(CustoTotalMes, {
        type: 'bar',
        data: {
            labels: ['SQUAD 1', 'SQUAD 2', 'SQUAD 3', 'SQUAD 4', 'SQUAD 5']
            ,
            datasets: [{
                label: 'Receita',
                data: [2500, 1800, 2200, 1500, 2500],
                backgroundColor: '#11A66C'
            }, {
                label: 'Custo',
                data: [2500, 3500, 2000, 1500, 2500],
                backgroundColor: '#FF2C2C'
            }]
        }
    });

    //CanvaReceitaCustoGeral
    var windowWidth = window.innerWidth;
    if (windowWidth >= 1320) {
        // SQUAD 1
        const CustoReceita = document.getElementById('CanvaReceitaCustoGeral').getContext('2d');
        const CanvaReceitaCustoGeral = new Chart(CustoReceita, {
            type: 'bar',
            data: {
                labels: ['Receita X Custo'],
                datasets: [{
                    label: 'Receita',
                    data: [2500],
                    backgroundColor: '#11A66C'
                }, {
                    label: 'Custo',
                    data: [2500],
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
        //SQUAD2
        const CustoReceita2 = document.getElementById('CanvaReceitaCustoGeral2').getContext('2d');
        const CanvaReceitaCustoGeral2 = new Chart(CustoReceita2, {
            type: 'bar',
            data: {
                labels: ['Receita X Custo'],
                datasets: [{
                    label: 'Receita',
                    data: [1800],
                    backgroundColor: '#11A66C'
                }, {
                    label: 'Custo',
                    data: [3500],
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
        //SQUAD 3
        const CustoReceita3 = document.getElementById('CanvaReceitaCustoGeral3').getContext('2d');
        const CanvaReceitaCustoGeral3 = new Chart(CustoReceita3, {
            type: 'bar',
            data: {
                labels: ['Receita X Custo'],
                datasets: [{
                    label: 'Receita',
                    data: [2200],
                    backgroundColor: '#11A66C'
                }, {
                    label: 'Custo',
                    data: [2000],
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
        //SQUAD 4
        const CustoReceita4 = document.getElementById('CanvaReceitaCustoGeral4').getContext('2d');
        const CanvaReceitaCustoGeral4 = new Chart(CustoReceita4, {
            type: 'bar',
            data: {
                labels: ['Receita X Custo'],
                datasets: [{
                    label: 'Receita',
                    data: [1500],
                    backgroundColor: '#11A66C'
                }, {
                    label: 'Custo',
                    data: [1500],
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
        //SQUAD 5
        const CustoReceita5 = document.getElementById('CanvaReceitaCustoGeral5').getContext('2d');
        const CanvaReceitaCustoGeral5 = new Chart(CustoReceita5, {
            type: 'bar',
            data: {
                labels: ['Receita X Custo'],
                datasets: [{
                    label: 'Receita',
                    data: [1500],
                    backgroundColor: '#11A66C'
                }, {
                    label: 'Custo',
                    data: [1500],
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
        //SQUAD 1
        const CustoReceita = document.getElementById('CanvaReceitaCustoGeral').getContext('2d');
        const CanvaReceitaCustoGeral = new Chart(CustoReceita, {
            type: 'doughnut',
            data: {
                labels: ['Receita', 'Custo'],
                datasets: [{
                    data: [2500, 2500],
                    backgroundColor: ['#11A66C', '#FF2C2C']
                }]
            },
            options: {
                responsive: true,
            }
        });
        //SQUAD 2
        const CustoReceita2 = document.getElementById('CanvaReceitaCustoGeral2').getContext('2d');
        const CanvaReceitaCustoGeral2 = new Chart(CustoReceita2, {
            type: 'doughnut',
            data: {
                labels: ['Receita', 'Custo'],
                datasets: [{
                    data: [1800, 3500],
                    backgroundColor: ['#11A66C', '#FF2C2C']
                }]
            },
            options: {
                responsive: true,
            }
        });
        //SQUAD 3
        const CustoReceita3 = document.getElementById('CanvaReceitaCustoGeral3').getContext('2d');
        const CanvaReceitaCustoGeral3 = new Chart(CustoReceita3, {
            type: 'doughnut',
            data: {
                labels: ['Receita', 'Custo'],
                datasets: [{
                    data: [2200, 2000],
                    backgroundColor: ['#11A66C', '#FF2C2C']
                }]
            },
            options: {
                responsive: true,
            }
        });
        //SQUAD 4
        const CustoReceita4 = document.getElementById('CanvaReceitaCustoGeral4').getContext('2d');
        const CanvaReceitaCustoGeral4 = new Chart(CustoReceita4, {
            type: 'doughnut',
            data: {
                labels: ['Receita', 'Custo'],
                datasets: [{
                    data: [1500, 1500],
                    backgroundColor: ['#11A66C', '#FF2C2C']
                }]
            },
            options: {
                responsive: true,
            }
        });
        //SQUAD 5
        const CustoReceita5 = document.getElementById('CanvaReceitaCustoGeral5').getContext('2d');
        const CanvaReceitaCustoGeral5 = new Chart(CustoReceita5, {
            type: 'doughnut',
            data: {
                labels: ['Receita', 'Custo'],
                datasets: [{
                    data: [1500, 1500],
                    backgroundColor: ['#11A66C', '#FF2C2C']
                }]
            },
            options: {
                responsive: true,
            }
        });
    }

    console.log("teste")
</script>

</html>