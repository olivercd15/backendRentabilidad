
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>REGISTRATE</title>

    <!-- Import External Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Import Internal Styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin-materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jqvmap.css')}}">
    <link rel="shortcut icon" href="{{asset('images/logo2.svg')}}"/>

    <!-- Import Google Material Icons-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Import External Fullcalendar-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<html>
    <div class="row">
        <div class="col s12 m10 offset-m1 l8 offset-l2">

            <form action="#" method="">
                @csrf

                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title center-align">Registrate</span>
                        <div class="row">
                            <div class="col s12 m6 input-field">
                                <input  id="ci" name="ci" type="number" class="validate">
                                <label for="ci">Carnet de Identidad :</label>
                            </div>

                            <div class="col s12 m6 input-field">
                                <input  id="nombre" name="nombre" type="text" class="validate">
                                <label for="nombre">Nombre :</label>
                            </div>

                            <div class="col s12 m6 input-field">
                                <input id="apellidos" name="apellidos" type="text" class="validate">
                                <label for="apellidos">Apellidos:</label>
                            </div>


                            <div class="col s12 m6 input-field">
                                <input id="direccion" name="direccion" type="text" class="validate">
                                <label for="direccion">Direccion :</label>
                            </div>

                            <div class="col s12 m6 input-field">
                                <input id="telefono" name="telefono" type="text" class="validate">
                                <label for="telefono">Telefono :</label>
                            </div>
                            <div class="col s12 m6 input-field">
                                <input id="email" name="email" type="email" class="validate">
                                <label for="email">Correo :</label>
                            </div>
                            <div class="col s12 m6 input-field">
                                <input id="password" name="password" type="password" class="validate">
                                <label for="password">Contraseña :</label>
                            </div>

                            <div class="col s12 m6 input-field">
                                <input id="password_confirmation" name="password_confirmation" type="password" class="validate">
                                <label for="password_confirmation">Repetir Contraseña :</label>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col s12 right-align">
                                <button class="btn positive-primary-color" type="submit">registrar</button>
                                <a href="/" class="btn negative-primary-color" type="submit">cancelar</a>
                            </div>
                        </div>

                    </div>
                </div>
            </form>


        </div>
    </div>
</html>

