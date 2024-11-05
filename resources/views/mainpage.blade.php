<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Estilos para el contenido principal de la página */
        .main-content {
            margin-left: 220px;
            padding: 20px;
            transition: margin-left 0.3s;
        }

        /* Estilos para el cuerpo de la página */
        body {
            background-color: white;
            color: white;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Aplicar el modelo de caja border-box a todos los elementos */
        * {
            box-sizing: border-box;
        }


        /* Estilos para la barra de navegación lateral */
        .navbar {
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

        /* Estilos para el icono de la barra de navegación */
        .nav-icon {
            display: flex;
            justify-content: center;
            cursor: pointer;
            padding: 10px;
            margin-bottom: 10px;
        }

        /* Estilos para los elementos del menú en la barra de navegación */
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

        /* Estilo para el estado de hover en los elementos del menú */
        .nav-item:hover {
            background-color: #333;
            transform: translateX(10px);
            transition: transform 0.3s ease, background-color 0.3s ease;
            font-size: 18px;
            transform: scale(1.1);
            color: #fff;
        }

        /* Contenedor para los contenidos de la barra de navegación */
        .nav-content {
            display: flex;
            flex-direction: column;
            transition: opacity 0.3s;
        }

        /* Estilos para la barra de navegación en estado oculto */
        .nav-hidden {
            width: 70px;
        }

        /* Estilos para la barra de navegación en estado visible */
        .nav-visible {
            width: 200px;
        }

        /* Animación para la opacidad de los elementos del menú cuando la barra está visible */
        .navbar.nav-visible .nav-item {
            opacity: 1;
            transition: opacity 0.5s ease-in;
        }

        /* Oculta el contenido de la barra de navegación cuando no está en hover */
        .navbar:not(:hover) .nav-content {
            opacity: 0;
        }

        /* Estilos para la barra de navegación al pasar el mouse sobre ella */
        .navbar:hover {
            width: 200px;
        }

        /* Estilos para la barra de navegación cuando no está en hover */
        .navbar:not(:hover) {
            width: 70px;
        }


        /* Contenedor para las cards de información */
        .info-cards-container {
            display: flex;
            justify-content: space-between;
            padding: 20px 0;
        }

        /* Estilos para cada card de información */
        .info-card {
            background-color: #000000;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            height: 150px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        /* Estilos para el texto de las cards con valor positivo */
        .positive {
            color: green;
        }

        /* Estilos para el texto de las cards con valor negativo */
        .negative {
            color: red;
        }


        /* Estilos para la Gráfica de Ventas del Ultimo Mes */
        canvas {
            max-height: 420px;
            width: 100%;
        }


        /* Estilos para los widgets inferiores de la página */
        .widgets {
            display: flex;
            justify-content: space-between;
            padding: 20px 0;
        }

        /* Estilos para cada gráfico de los widgets inferiores */
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


        /* Estilos para el pie de página */
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

        /* Estilos para el fondo del pie de página con gradiente */
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

        /* Estilos para las columnas en el pie de página */
        .col {
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 1rem 1rem;
            width: 20%;
        }

        /* Estilos específicos para la segunda, tercera, y cuarta, columna en el pie de página */
        .col2,
        .col3,
        .col4 {
            background-color: #000000;
            border-radius: 2rem;
            text-align: left;
        }

        /* Estilos para los íconos sociales en el pie de página */
        .social {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            gap: 1.25rem;
        }

        /* Estilos para los enlaces en el pie de página */
        a {
            text-decoration: none;
            color: inherit;
        }

        /* Estilos para el pie de página en pantallas con un ancho máximo de 1000px */
        @media screen and (max-width: 1000px) {
            .col {
                padding: 0.9rem 2.4rem;
            }
        }

        /* Estilos para el pie de página en pantallas con un ancho máximo de 700px */
        @media screen and (max-width: 700px) {
            footer {
                flex-direction: column;
                padding: 5rem 20vw;
            }

            .col {
                width: 100%;
            }
        }
    </style>
</head>


    <body>

        {{-- {{print_r($Custos)}} --}}
        <!-- Barra de Navegación Lateral -->
        <div class="navbar" id="navbar">

            <!-- Icono de la Barra de Navegacion -->
            <div class="nav-icon">
                <img src="https://raichu-uploads.s3.amazonaws.com/logo_scoregroup_iRcBug.png" style="width: 50px">
            </div>

            <!-- Contenido de la barra de navegación con enlaces a otras páginas web del mismo sitio web -->
            <div class="nav-content">
                <p><a href=" "> </a> </p>
                <p><a href="#">Home</a></p>
            </div>

        </div>


        <!-- Contenido Principal del Dashboard -->
        <div class="main-content" id="main-content">


            <!-- Cards Superiores -->
            <div class="info-cards-container" id="info-cards-container">

                <!-- Card que muestra las ventas offline mesuales -->
                <div class="info-card">
                    <h2>Custo Total</h2>
                    <p>$</p>
                </div>

                <!-- Card que muestra los gastos mesuales -->
                <div class="info-card">
                    <h2>Imposto (10%)</h2>
                    <p class="negative">$</p>
                </div>

                <!-- Card que muestra las ventas mesuales totales -->
                <div class="info-card">
                    <h2>Quantidade de Funcionarios</h2>
                    <p></p>
                </div>

                <!-- Card que muestra los ingresos mesuales -->
                <div class="info-card">
                    <h3>Salarios Funcionarios <br> -imposto</h3>
                    <p class="negative">$</p>
                </div>

                <!-- Card que muestra las ventas online mesuales -->
                <div class="info-card">
                    <h2>Sales Online</h2>
                    <p>$5,000.00</p>
                </div>

            </div>


            <!-- Contenedor de Gráfica de Ventas del Ultimo Mes -->
            <div class="sales-chart-container" id="sales-chart-container">

                <!-- Gráfico de Ventas del Ultimo Mes -->
                <div class="sales-line-chart">
                    <h2>Sales Last Month</h2>
                    <canvas id="lineChart"></canvas>
                </div>

            </div>


            <!-- Widgets Inferiores -->
            <div class="widgets" id="widgets">

                <!-- Gráfico de pastel de los principales países de los que provienen los clientes -->
                <div class="pie">
                    <h2>Top Countries</h2>
                    <canvas id="pieChart"></canvas>
                </div>

                <!-- Gráfico de Gastos Anuales -->
                <div class="expenses">
                    <h2>Expenses</h2>
                    <canvas id="expensesChart"></canvas>
                </div>

                <!-- Gráfico mixto para experiencia del usuario -->
                <div class="user-experience">
                    <h2>User Experience</h2>
                    <canvas id="PolarAreaChart"></canvas>
                </div>

                <!-- Gráfico de Ingresos Anuales -->
                <div class="income">
                    <h2>Income</h2>
                    <canvas id="incomeChart"></canvas>
                </div>

                <!-- Gráfico de retroalimentación del usuario -->
                <div class="feedback">
                    <h2>User Feedback</h2>
                    <canvas id="feedbackChart"></canvas>
                </div>

            </div>


            <!-- Más Widgets Inferiores -->
            <div class="widgets" id="widgets">

                <!-- Gráfico de resumen de ventas -->
                <div class="sales1">
                    <h2>Sales</h2>
                    <h2>Last Month's</h2>
                    <canvas id="sales1Chart"></canvas>
                </div>

                <!-- Gráfico de quejas -->
                <div class="complaints">
                    <h2>Complaints</h2>
                    <canvas id="complaintsChart"></canvas>
                </div>

                <!-- Gráfico mixto de especulación de ventas -->
                <div class="sales-speculation">
                    <h2>Sales Speculation</h2>
                    <canvas id="LinesBarChart"></canvas>
                </div>

                <!-- Gráfico de crecimiento de usuarios -->
                <div class="growth">
                    <h2>Growth</h2>
                    <canvas id="GrowthChart"></canvas>
                </div>

                <!-- Gráfico de resumen de ventas -->
                <div class="sales2">
                    <h2>Sales</h2>
                    <h2>Last Month's</h2>
                    <canvas id="sales2Chart"></canvas>
                </div>

            </div>


        </div>


        <!-- Pie de Página -->
    


    </body>


    <script>
        // Variable de visibilidad para el menú de navegación al cargar la página
        let navVisible = true;


        // Evento que se ejecuta cuando el contenido del documento se ha cargado completamente
        // Esta función asegura que todos los elementos del DOM estén disponibles para su manipulación, permitiendo realizar ajustes iniciales como la configuración de la barra de navegación y el margen del contenido principal.
        document.addEventListener('DOMContentLoaded', function() {

            const navbar = document.getElementById('navbar');
            const mainContent = document.getElementById('main-content');

            navbar.classList.add('nav-visible');
            mainContent.style.marginLeft = '70px';


            // Función para Mostrar / Ocultar la Barra de Navegación
            // Función que alterna la visibilidad de la barra de navegación, cambiando su clase y ajustando el margen del contenido principal según su estado (visible u oculto).
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


        // Gráfico de Línea
        // Se obtiene el contexto del lienzo del gráfico de línea y se crea el gráfico usando la librería Chart.js
        const ctxLine = document.getElementById('lineChart').getContext('2d');
        const lineChart = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: Array.from({
                    length: 30
                }, (_, i) => `Day ${i + 1}`),
                datasets: [{
                    label: 'Sales',
                    data: Array.from({
                        length: 30
                    }, () => Math.floor(Math.random() * 100)),
                    borderColor: 'black',
                    fill: false
                }]
            }
        });


        // Gráfico de Pastel
        // Se obtiene el contexto del lienzo del gráfico de pastel y se crea el gráfico
        var ctxPie = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: ['USA', 'Canada', 'UK', 'Germany', 'France', 'China'],
                datasets: [{
                    data: [3000, 2500, 2000, 1500, 1000, 500],
                    backgroundColor: ['rgba(255, 255, 255, 0.80', 'rgba(255, 255, 255, 0.50', 'gray',
                        'rgba(127, 127, 127, 0.25', 'rgba(0, 0, 0, 0)', 'light'
                    ]
                }]
            }
        });


        // Gráfico de Barras
        // Se obtiene el contexto del lienzo del gráfico de barras y se crea el gráfico
        const ctxBar = document.getElementById('expensesChart').getContext('2d');
        const barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['Jan/Feb', 'Mar/Apr', 'May/Jun', 'Jul/Aug', 'Sep/Oct', 'Nov/Dec'],
                datasets: [{
                    label: 'Expenses',
                    data: [9000, 6000, 8000, 6000, 4000, 2000],
                    backgroundColor: 'darkred'
                }]
            }
        });


        // Gráfico Mixto entre Radar y Polar
        // Se obtiene el contexto del lienzo del gráfico mixto y se crea el gráfico
        const ctxMixedPolarArea = document.getElementById('PolarAreaChart').getContext('2d');
        const mixedChartPolarArea = new Chart(ctxMixedPolarArea, {
            type: 'radar',
            data: {
                labels: ["Referrals", "People", "Whats", "WebSite", "Social Media"],
                datasets: [{
                        label: "Growth",
                        data: [100, 100, 100, 100, 100],
                        backgroundColor: "rgba(255, 0, 0, 0.25)",
                        borderColor: 'rgba(255, 0, 0, 1)',
                        borderWidth: 1
                    },
                    {
                        type: 'polarArea',
                        label: "Complaints",
                        data: [60, 70, 80, 90, 100],
                        backgroundColor: [
                            'rgba(0, 0, 255, 1)',
                            'rgba(0, 0, 205, 1)',
                            'rgba(0, 0, 155, 1)',
                            'rgba(0, 0, 105, 1)',
                            'rgba(0, 0, 55, 1)'
                        ],
                        borderColor: [
                            'rgba(0, 0, 255, 1)',
                            'rgba(0, 0, 205, 1)',
                            'rgba(0, 0, 155, 1)',
                            'rgba(0, 0, 105, 1)',
                            'rgba(0, 0, 55, 1)'
                        ],
                        borderWidth: 1,
                        x: 0.5,
                        y: 0.5,
                        radius: 0.7
                    }
                ]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: "Growth y Complaints"
                    }
                },
                scales: {
                    r: {
                        angleLines: {
                            display: true
                        },
                        suggestedMin: 0,
                        suggestedMax: 100
                    }
                }
            }
        });


        // Gráfico de Barras
        // Se obtiene el contexto del lienzo del gráfico de barras y se crea el gráfico
        const ctxPerformance = document.getElementById('incomeChart').getContext('2d');
        const performanceChart = new Chart(ctxPerformance, {
            type: 'bar',
            data: {
                labels: ['Jan/Feb', 'Mar/Apr', 'May/Jun', 'Jul/Aug', 'Sep/Oct', 'Nov/Dec'],
                datasets: [{
                    label: 'Income',
                    data: [2000, 4000, 6000, 8000, 6000, 9000],
                    backgroundColor: 'green'
                }]
            }
        });


        // Gráfico de Doughnut
        // Se obtiene el contexto del lienzo del gráfico de doughnut y se crea el gráfico
        const ctxFeedback = document.getElementById('feedbackChart').getContext('2d');
        const feedbackChart = new Chart(ctxFeedback, {
            type: 'doughnut',
            data: {
                labels: ['Medium', 'Negative', 'Neutral', 'Regular', 'Good', 'Excelent'],
                datasets: [{
                    data: [50, 100, 150, 200, 250, 300],
                    backgroundColor: ['light', 'rgba(0, 0, 0, 0)', 'rgba(127, 127, 127, 0.25', 'gray',
                        'rgba(255, 255, 255, 0.50', 'rgba(255, 255, 255, 0.80'
                    ]
                }]
            }
        });


        // Gráfico de Línea
        // Se obtiene el contexto del lienzo del gráfico de línea y se crea el gráfico
        const ctxSales = document.getElementById('sales1Chart').getContext('2d');
        const salesChart = new Chart(ctxSales, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Sales',
                    data: [0, 600, 200, 800, 400, 1000],
                    borderColor: 'orange',
                    fill: true,
                    borderWidth: 1,
                }]
            }
        });


        // Gráfico Polar
        // Se obtiene el contexto del lienzo del gráfico polar y se crea el gráfico
        const ctxDoughnut = document.getElementById('complaintsChart').getContext('2d');
        const doughnutChart = new Chart(ctxDoughnut, {
            type: 'polarArea',
            data: {
                labels: ["Referrals", "Directly", "Whats", "WebSite", "Social Media"],
                datasets: [{
                    label: 'Complaints',
                    data: [60, 70, 80, 90, 100],
                    backgroundColor: [
                        'rgba(0, 0, 255, 1)',
                        'rgba(0, 0, 205, 1)',
                        'rgba(0, 0, 155, 1)',
                        'rgba(0, 0, 105, 1)',
                        'rgba(0, 0, 55, 1)'
                    ],
                    borderColor: [
                        'rgba(0, 0, 255, 1)',
                        'rgba(0, 0, 205, 1)',
                        'rgba(0, 0, 155, 1)',
                        'rgba(0, 0, 105, 1)',
                        'rgba(0, 0, 55, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    r: {
                        beginAtZero: true
                    }
                }
            }
        });


        // Gráfico Mixto Entre Líneas y Barras
        // Se obtiene el contexto del lienzo del gráfico mixto y se crea el gráfico
        const ctxMixedLinesBar = document.getElementById('LinesBarChart').getContext('2d');
        const mixedChartLinesBar = new Chart(ctxMixedLinesBar, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    type: 'line',
                    label: 'Income',
                    data: [0, 3000, 6000, 9000, 6000, 3000, 6000, 9000, 6000, 3000, 6000, 10000],
                    borderColor: 'rgba(0, 0, 111, 1)',
                    backgroundColor: 'rgba(0, 0, 123, 1)',
                    fill: false
                }, {
                    type: 'bar',
                    label: 'Expenses',
                    data: [1500, 3000, 4500, 6000, 7500, 9000, 6000, 3000, 6000, 9000, 6000, 4000],
                    backgroundColor: "rgba(200, 0, 0, 0.50)",
                    borderColor: "rgba(200, 0, 0, 0.50)"
                }]
            }
        });


        // Gráfico de Radar
        // Se obtiene el contexto del lienzo del gráfico de radar y se crea el gráfico
        const ctxUserGrowth = document.getElementById('GrowthChart').getContext('2d');
        const userGrowthChart = new Chart(ctxUserGrowth, {
            type: 'radar',
            data: {
                labels: ["Social Media", "WebSite", "Referrals", "Community", "WhatsApp"],
                datasets: [{
                    label: "Growth",
                    data: [1000, 1000, 1000, 1000, 1000],
                    backgroundColor: "rgba(200, 0, 0, 0.50)",
                    borderColor: 'darkred',
                    borderWidth: 1
                }]
            }
        });


        // Gráfico de Línea
        // Se obtiene el contexto del lienzo del gráfico de línea y se crea el gráfico
        const ctxGauge = document.getElementById('sales2Chart').getContext('2d');
        const gaugeChart = new Chart(ctxGauge, {
            type: 'line',
            data: {
                labels: ['July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [{
                    label: 'Sales',
                    data: [1000, 400, 800, 200, 600, 0],
                    borderColor: 'orange',
                    borderWidth: 1,
                    fill: true
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
    </script>

    </html>
</body>

</html>
