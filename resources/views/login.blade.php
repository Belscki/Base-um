<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Score</title>
    <style>
        body {
            background-color: #11A66C;
            display: grid;
            grid-template-columns: 10% 30% 1fr;
            margin: 0;
        }

        .espacoLogin {
            background-color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .espacoLogin h1 {
            color: #11A66C;
        }

        .espacoLogin form label {
            background-color: #11A66C;
        }

        .campoinput {
            margin-top: 2vh;
        }

        .espacoScore {
            display: flex;
            flex-direction: column;
            justify-content: end;
            text-align: right;
        }

        .espacoScore h1 {
            font-size: 100px;
            margin-right: 1vw;
            margin-bottom: 0;
            margin-top: 0;
            color: white;
        }

        .campoinput input {
            background-color: #11A66C;
            width: 20vw;
            height: 5vh;
        }

        ::-webkit-input-placeholder {
            color: white;
        }
        .campoinput label{    
            background-color: #11A66C;
        }
        .botaoinput input{
            margin-top: 5vh;
            padding-left: 2.5vw;
            padding-right: 2.5vw;
            padding-top: 1vh;
            padding-bottom: 1vh;
            background-color:#11A66C;
            color: white;
        }
        @media (max-width:720px) {
            .espacoScore{
                display: none;
            }
            body {
                display: ;
                grid-template-columns: 10% 80% 1fr;
            }
            .campoinput input {
            background-color: #11A66C;
            width: 40vw;
            height: 5vh;
        }
        }
    </style>
</head>

<body>
    <span></span>
    <div class="espacoLogin">
        <h1>LOGIN</h1>
        <form action="">
            <div class="campoinput">
                <label for=""></label><input type="text" placeholder="E-MAIL" required=""><br>
            </div>
            <div class="campoinput">
                <label for=""></label><input type="password" placeholder="SENHA" required=""><br>
            </div>
            <div class="botaoinput">
                <input type="submit" value="Entrar">
            </div>
        </form>
    </div>
    <div class="espacoScore">
        <h1>SCORE</h1>
        <h1>GROUP</h1>
    </div>
</body>

</html>