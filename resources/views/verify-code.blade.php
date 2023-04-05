<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            background-color: #111827;
            padding: 2%
        }

        .title{
            text-align: center;
            font-family: "Lucida Console", "Courier New", monospace;
            font-size: 35px;
        }

        .ins{
            text-align: center;
            font-family: "Lucida Console", "Courier New", monospace;
            font-size: 25px;
        }

        .conteiner{
            width: 70%;
            height: 80%;
            background-color: #DDDDDD;
            border-radius: 50px;
            padding: 20px;
            margin: auto;
        }

        .inp{
            border-radius: 30px;
            width: 60%;
            height: 30%;
            text-align: center;
            font-family: "Lucida Console", "Courier New", monospace;
            font-size: 25px;
        }

        .fm{
            margin-left: 28%;
        }

        .btn{
            background-color: rgb(31, 187, 31);
            width: 30%;
            height: 30%;
            margin-left: 17%;
            border-radius: 30px;
            font-family: "Lucida Console", "Courier New", monospace;
            font-size: 20px;
        }
    </style>
    <title>Ingreso a la App</title>
</head>
<body>
    <div class="conteiner">
        <h1 class="title">Verificación de Ingreso a la App</h1><br>
        <p class="ins">Para protegerte, hemos enviado un correo electronico con el codigo correspondiente para tu app movil para poder obtener tu codigo de ingreso</p> <br>
        <form class="fm" method="POST" action="/code-access">
            @csrf
            <input class="inp" type="number" name="code_page" id="code_page" placeholder="Codigo Para Ingresar"><br><br>
            <input class="btn" type="submit" value="Acceder">
        </form>
    </div>
</body>
</html>
{{-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        $font-title: 'Open Sans';

        @import url('https://fonts.googleapis.com/css?family=Open+Sans');

        * {
            box-sizing: border-box;
        }

        body {
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .c-email {
            width: 40vw;
            border-radius: 40px;
            overflow: hidden;
            box-shadow: 0px 7px 22px 0px rgba(0, 0, 0, .1);

            &__header {
                background-color: #0fd59f;
                width: 100%;
                height: 60px;

                &__title {
                    font-size: 23px;
                    font-family: $font-title;
                    height: 60px;
                    line-height: 60px;
                    margin: 0;
                    text-align: center;
                    color: white;
                }
            }

            &__content {
                width: 100%;
                height: 300px;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
                flex-wrap: wrap;
                background-color: #fff;
                padding: 15px;

                &__text {
                    font-size: 20px;
                    text-align: center;
                    color: #343434;
                    margin-top: 0;
                }
            }

            &__code {
                display: block;
                width: 60%;
                margin: 30px auto;
                background-color: #ddd;
                border-radius: 40px;
                padding: 20px;
                text-align: center;
                font-size: 36px;
                font-family: $font-title;
                letter-spacing: 10px;
                box-shadow: 0px 7px 22px 0px rgba(0, 0, 0, .1);
            }

            &__footer {
                width: 100%;
                height: 60px;
                background-color: #fff;
            }
        }

        .text-title {
            font-family: $font-title;
        }

        .text-center {
            text-align: center;
        }

        .text-italic {
            font-style: italic;
        }

        .opacity-30 {
            opacity: 0.3;
        }

        .mb-0 {
            margin-bottom: 0;
        }
    </style>
    <title>Codigo de Verificación</title>
</head>

<body>
    <div class="c-email">
        <div class="c-email__header">
            <h1 class="c-email__header__title">Your Verification Code</h1>
        </div>
        <div class="c-email__content">
            <p class="c-email__content__text text-title">
                Enter this verification code in field:
            </p>
            <div class="c-email__code">
                <span class="c-email__code__text">123456</span>
            </div>
            <p class="c-email__content__text text-italic opacity-30 text-title mb-0">Verification code is valid only for
                30 minutes</p>
        </div>
        <div class="c-email__footer"></div>
    </div>
</body>

</html>
 --}}