<!DOCTYPE html>
<!--
Sorce: login.php
Description: Web page for view how drive the Responsive Web
Date: 14/Feb/2020
Author: Gabriel Carcedo Rodríguez
-->
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>Programa 5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <p></p>
    <div class="row">
        <div class="card col-lg-6 form-row align-items-center mx-auto">
            <p></p>
            <img src="https://web.nubox.com/Login/Content/img/nbx-avatar_login.svg" class="card-img-top col-lg-4">
            <div class="card-body">


                <form action="../../Controller/Login.php" method="post">
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInput">Name</label>
                        <input type="text" class="form-control mb-2" id="inlineFormInput"
                            placeholder="Escribe tu Nombre">
                    </div>
                    <div class="col-auto">
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" class="form-control" id="inputUser" name='inputUser'
                                placeholder="Nombre de Usuario">
                        </div>
                    </div>
                    <div class="col-auto">
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword"
                            placeholder="">
                    </div>
                    <div class="col-auto">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                            <label class="form-check-label" for="autoSizingCheck2">
                                Recordar
                            </label>
                        </div>
                    </div>
                    <p></p>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2">Entrar</button>
                    </div>
            </div>
        </div>
        </form>
    </div>
</body>

</html>