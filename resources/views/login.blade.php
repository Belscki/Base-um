<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Score</title>
    <style>
        body {
            margin: 0;
        }

        .espacoLogin {
            display: grid;
            grid-template-columns: 1fr 70% 1fr;
            -webkit-box-shadow: 0px -1px 71px 4px rgba(0, 0, 0, 0.51);
            -moz-box-shadow: 0px -1px 71px 4px rgba(0, 0, 0, 0.51);
            box-shadow: 0px -1px 71px 4px rgba(0, 0, 0, 0.51);
            height: 100vh;
            width: 100%;
            border-radius: 0;
        }

        .esquerdaLogin {
            display: flex;
            justify-content: end;
            align-items: end;
            background-color: #11A66C;
            border-radius: 0;
            /* border-right: 26px groove #11a66c; */
        }

        .direitaLogin {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .direitaLogin button {
            background-color: white;
            color: #11a66c;
            border-radius: 75px 75px 75px 75px;
            -webkit-border-radius: 75px 75px 75px 75px;
            -moz-border-radius: 75px 75px 75px 75px;
            -webkit-box-shadow: -3px 30px 42px -6px rgba(0, 0, 0, 0.31);
            -moz-box-shadow: -3px 30px 42px -6px rgba(0, 0, 0, 0.31);
            box-shadow: -3px 30px 42px -6px rgba(0, 0, 0, 0.31);
            border: 2px solid #11A66C;
            padding: 1.5vw;
            font-size: 15px;
        }

        .direitaLogin button:hover {
            background-color: #11a66c;
            color: white;
        }

        .direitaLogin form {
            font-family: "IBM Plex Mono", monospace;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0 10vw 0 10vw;
            padding: 15vh 0 15vh 0;
        }

        .direitaLogin form h1 {
            color: black;
        }


        :root {

            --input-color: #99A3BA;
            --input-border: #11a66c;
            ;
            --input-background: #fff;
            --input-placeholder: #CBD1DC;

            --input-border-focus: #11a66c;

            --group-color: var(--input-color);
            --group-border: var(--input-border);
            --group-background: #EEF4FF;

            --group-color-focus: #fff;
            --group-border-focus: var(--input-border-focus);
            --group-background-focus: #11a66c;

        }

        .form-field {
            display: block;
            width: 20vw;
            padding: 8px 16px;
            line-height: 25px;
            font-size: 14px;
            font-weight: 500;
            font-family: inherit;
            border-radius: 6px;
            color: var(--input-color);
            border: 1px solid var(--input-border);
            background: var(--input-background);
            transition: border .3s ease;
            -webkit-box-shadow: 4px 22px 42px -6px rgba(0, 0, 0, 0.31);
            -moz-box-shadow: 4px 22px 42px -6px rgba(0, 0, 0, 0.31);
            box-shadow: 4px 22px 42px -6px rgba(0, 0, 0, 0.31);

            &::placeholder {
                color: var(--input-placeholder);
            }

            &:focus {
                outline: none;
                border-color: var(--input-border-focus);
            }
        }

        .form-group {
            position: relative;
            display: flex;
            width: 20vw;

            &>span,
            .form-field {
                white-space: nowrap;
                display: block;

                &:not(:first-child):not(:last-child) {
                    border-radius: 0;
                }

                &:first-child {
                    border-radius: 6px 0 0 6px;
                }

                &:last-child {
                    border-radius: 6px 6px 6px 6px;
                }

                &:not(:first-child) {
                    margin-left: -1px;
                }
            }

            .form-field {
                position: relative;
                z-index: 1;
                flex: 1 1 auto;
                width: 1%;
                margin-top: 0;
                margin-bottom: 0;
            }

            &>span {
                text-align: center;
                padding: 8px 12px;
                font-size: 14px;
                line-height: 25px;
                color: var(--group-color);
                background: var(--group-background);
                border: 1px solid var(--group-border);
                transition: background .3s ease, border .3s ease, color .3s ease;
                -webkit-box-shadow: 4px 22px 42px -6px rgba(0, 0, 0, 0.31);
                -moz-box-shadow: 4px 22px 42px -6px rgba(0, 0, 0, 0.31);
                box-shadow: 4px 22px 42px -6px rgba(0, 0, 0, 0.31);
            }

            &:focus-within {
                &>span {
                    color: var(--group-color-focus);
                    background: var(--group-background-focus);
                    border-color: var(--group-border-focus);
                }
            }
        }

        #inputSenha {
            margin-top: 5vh;
        }

        #entrarBotao {
            margin-top: 4vh;
            background-color: white;
            color: #11a66c;
            border-radius: 75px 75px 75px 75px;
            -webkit-border-radius: 75px 75px 75px 75px;
            -moz-border-radius: 75px 75px 75px 75px;
            border: 2px solid #11a66c;
            padding: 1vw;
            font-size: 10px;
        }

        #entrarBotao:hover {
            background-color: #11a66c;
            color: white;
        }

        #imgScore {
            border-radius: 0 0 0 50px;
        }

        @media (max-width:800px) {
            .espacoLogin {
                display: grid;
                grid-template-columns: 1fr 90% 1fr;
                -webkit-box-shadow: 0px -1px 71px 4px rgba(0, 0, 0, 0.51);
                -moz-box-shadow: 0px -1px 71px 4px rgba(0, 0, 0, 0.51);
                box-shadow: 0px -1px 71px 4px rgba(0, 0, 0, 0.51);
                height: 100vh;
                width: 100%;
                border-radius: 0;
            }
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton+SC&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="espacoLogin">
        <div class="esquerdaLogin">
            <img src="{!! public_path('css/logo.png') !!}" alt="" id="imgScore">
        </div>
        <div class="direitaLogin">
            <!-- <button onclick="aparecerLogin()" id="botaoLogin">LOGIN</button> -->
            <!-- Colocar Methodo de Login.blade -->
            <form action="/loginSubmit" method="post" id="loginForm" novalidate>
                @csrf
                <h1>LOGIN</h1>
                <div class="form-group">
                    <span>Email:</span>
                    <input class="form-field" type="email" name="text_username" value="{{ old('text_username') }}"
                        placeholder="Insira o Email">
                </div>
                {{-- show error --}}
                @error('text_username')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group" id="inputSenha">
                    <span>Senha:</span>
                    <input class="form-field" type="password" name="text_password" value="{{ old('text_password') }}"
                        placeholder="Insira a Senha">
                </div>
                {{-- show error --}}
                @error('text_password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
                <input type="submit" value="ENTRAR" id="entrarBotao">
            </form>
            {{-- invalid login --}}
            @if (@session('loginError'))
                <div class="alert alert-danger">
                    {{ session('loginError') }}
                </div>
            @endif
        </div>
        <div class="esquerdaLogin">
            <span></span>
        </div>
    </div>
</body>

</html>
