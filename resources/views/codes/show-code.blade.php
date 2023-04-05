<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" href="../../css/style.scss">-->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans');

        * {
            box-sizing: border-box;
        }

        body {
            background-color: #111827;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .c-email {
            width: 40vw;
            border-radius: 40px;
            overflow: hidden;
            box-shadow: 0px 7px 22px 0px rgba(0, 0, 0, .1);
        }

        .c-email__header {
            background-color: #0fd59f;
            width: 100%;
            height: 60px;
        }

        .c-email__header__title {
            font-size: 23px;
            font-family: 'Open Sans';
            height: 60px;
            line-height: 60px;
            margin: 0;
            text-align: center;
            color: white;
        }

        .c-email__content {
            width: 100%;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            background-color: #fff;
            padding: 15px;
        }

        .c-email__content__text {
            font-size: 20px;
            text-align: center;
            color: #343434;
            margin-top: 0;
        }

        .c-email__code {
            display: block;
            width: 60%;
            margin: 30px auto;
            background-color: #ddd;
            border-radius: 40px;
            padding: 20px;
            text-align: center;
            font-size: 36px;
            font-family: 'Open Sans';
            letter-spacing: 10px;
            box-shadow: 0px 7px 22px 0px rgba(0, 0, 0, .1);
        }

        .c-email__footer {
            width: 100%;
            height: 60px;
            background-color: #fff;
        }

        .text-title {
            font-family: 'Open Sans';
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
    <title>Codigo Web</title>
</head>

<body>
    <br><br>
    <div class="c-email">
        <div class="c-email__header">
            <h1 class="c-email__header__title">Codigo de Verificación</h1>
        </div>
        <div class="c-email__content">
            <p class="c-email__content__text text-title">
                Ingresa este codigo en tu app movil para obtener tu codigo de ingreso:
            </p>
            <div class="c-email__code">
                <span class="c-email__code__text">{{ $code }}</span>
            </div>
            <!--<p class="c-email__content__text text-italic opacity-30 text-title mb-0">Verification code is valid only for
                30 minutes</p>-->
        </div>
        <div class="c-email__footer"></div>
    </div>
</body>

</html>
