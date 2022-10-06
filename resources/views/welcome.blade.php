<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <title>Registro</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

        body{
            margin: 0;
            font-family:Georgia, 'Times New Roman', Times, serif;
            background: #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-register{
            width: 95%;
            max-width: 700px;
            background: white;
            padding: 50px;
        }

        .form__title{
            margin-top:0;
            font-size: 1.7em;
            text-align: center;
        }

        .form__label{
            display: block;
        }

        .form__label{
            width: 30%;
        }

        .container--flex{
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
            align-items: center;
        }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
    <form action="insertar.php" class="form-register" method="post">
        <h1 class="form__title">REGISTRO DE COMPONENTES</h1>
        <div class="mb-3">
            <label for="" class="from__label">Seleccione componente:</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Seleccionar</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>

        <div class="mb-3">
            <label for="" class="from__label">Seleccione marca:</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Seleccionar</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>

        <div class="mb-3">
            <label for="" class="from__label">Ingrese cantidad:</label>
            <input type="text" class="form__input">
        </div>

        <div class="input-group">
            <span class="input-group-text">Comentario</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        <br>
        <div class="d-grid gap-2">
            <input type="submit" class="btn btn-danger">
        </div>
    </form>
    </body>
</html>
