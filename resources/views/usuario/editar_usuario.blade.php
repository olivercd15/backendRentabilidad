@extends('template2.app')
@section('content')
    <div class="row">
        <div class="col s12 m10 offset-m1 l8 offset-l2">

            <form action="" method="">
                @csrf
                @method('PUT')

                <div class="card z-depth-4">
                    <div class="card-content">
                        <span class="card-title center-align">Editar datos</span>
                        <div class="row">
                            <div class="col s12 m6 input-field">
                                <input  id="ci" name="ci" type="number" class="validate" value="">
                                <label for="ci">Carnet de Identidad :</label>
                            </div>

                            <div class="col s12 m6 input-field">
                                <input  id="nombre" name="nombre" type="text" class="validate" value="">
                                <label for="nombre">Nombre :</label>
                            </div>

                            <div class="col s12 m6 input-field">
                                <input id="apellidos" name="apellidos" type="text" class="validate" value="">
                                <label for="apellidos">Apellidos :</label>
                            </div>

                            <div class="col s12 m6 input-field">
                                <input id="direccion" name="direccion" type="text" class="validate" value="">
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

                        </div>

                        <div class="row">
                            <div class="col s12 right-align">
                                <button class="btn positive-primary-color" type="submit">modificar</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection
