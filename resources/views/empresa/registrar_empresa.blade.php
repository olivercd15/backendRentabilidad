@extends('template2.app')
@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>REGISTRE UNA EMPRESA</title>

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
                    <span class="card-title center-align">Registrar Empresa</span>
                    <div class="row">

                        <div class="col s12 m6 input-field">
                            <input  id="nombreempresa" name="nombreempresa" type="text" class="validate">
                            <label for="nombreempresa">Nombre de la Empresa:</label>
                        </div>

                        <div class="col s12 m6 input-field">
                            <input id="descripcion" name="descripcion" type="text" class="validate">
                            <label for="descripcion">Descripcion:</label>
                        </div>


                        <div class="col s12 m6 input-field">
                            <input id="buscars" name="buscars" type="text" class="validate">
                            <label for="buscars">¿Buscas Socios? :</label>
                        </div>

                        <div class="col s12 m6 input-field">
                            <input id="estado" name="estado" type="text" class="validate">
                            <label for="estado">Estado :</label>
                        </div>

                        <div class="col s12 m6 input-field">
                            <input id="direccion" name="direccion" type="text" class="validate">
                            <label for="direccion">Direccion :</label>
                        </div>

                        <div class="col s12 m6 input-field">
                            <input id="categoria" name="categoria" type="text" class="validate">
                            <label for="categoria">Categoria :</label>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-sm-12 margen-abajo">
                                <label for="image">Seleccione su imagen</label>
                                <div class="custom-file">
                                    <input id="logo" name="logo" type="file" class="custom-file-input {{$errors->has('logo') ? 'is-invalid' : ''}}" lang="es" accept="image/*">
                                    <div class="invalid-feedback">{!! $errors->first('logo', ':message') !!}</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col s12 right-align">
                            <button class="btn positive-primary-color" type="submit">registrar</button>
                            <a href="index" class="btn negative-primary-color" type="submit">cancelar</a>
                        </div>
                    </div>

                </div>
            </div>
        </form>


    </div>
</div>
</html>
@endsection
