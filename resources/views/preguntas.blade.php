@extends('template2.app')

@section('content')
    <head>
        <script type="text/javascript">
            function obtenerdatos()
            {
                var nombre = document.getElementById('nombre').value;
                var capital = parseFloat(document.getElementById('capital').value);
                var periodo = parseFloat(document.getElementById('periodo').value);
                document.registro.nombreobtenido.value = nombre;
                document.registro.capitalobtenido.value = capital;
                document.registro.periodoobtenido.value = periodo;

            }
        </script>
    </head>

    <div class="card-login">
        <h1>Responder Las Preguntas</h1>
        <form name="registro" action="" method="">
        @csrf

        <!-- USERNAME INPUT -->
            <label >1. ¿Cuánto conocimiento posees acerca de tu negocio?: </label>
            <div class="form-group col-md-4">
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                   <option >Alto</option>
                    <option >Medio</option>
                    <option >Bajo</option>
                </select>
            </div>
            <label for="username">2. ¿Tu producto o servicio utiliza servicios renovables?: </label>
            <div class="form-group col-md-4">

                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option >Alto</option>
                    <option >Medio</option>
                    <option >Bajo</option>
                </select>
            </div>
            <label for="username">3. ¿Cuál es el tamaño de tu negocio al nivel de empleados?: </label>
            <div class="form-group col-md-4">

                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option >Alto</option>
                    <option >Medio</option>
                    <option >Bajo</option>
                </select>
            </div>
            <label for="username">4. ¿Cuál es el sector de edad que abarca tu producto o servicio?: </label>
            <div class="form-group col-md-4">
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option >Alto</option>
                    <option >Medio</option>
                    <option >Bajo</option>
                </select>
            </div>
            <label for="username">5. ¿Cómo cree que esta la competencia de su mercado?: </label>
            <div class="form-group col-md-4">

                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option >Alto</option>
                    <option >Medio</option>
                    <option >Bajo</option>
                </select>
            </div>
            <label for="username">6. ¿Tu producto puede llegar a otras zonas de la ciudad?: </label>
            <div class="form-group col-md-4">

                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option >Alto</option>
                    <option >Medio</option>
                    <option >Bajo</option>
                </select>
            </div>
            <label for="username">7. ¿Cuanto conocimiento posee tu equipo acerca del negocio?: </label>
            <div class="form-group col-md-4">

                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option >Alto</option>
                    <option >Medio</option>
                    <option >Bajo</option>
                </select>
            </div>
            <label for="username"> 8. Ingresar: Nombre de Negocio, Capital Inicial, Cantidad de Periodos (Meses),: </label>
            <input name="nombre" id="nombre" type="text"  placeholder="Nombre de negocio">
            <input name="capital" id="capital" type="text"  placeholder="Capital Inicial">
            <input name="periodo" id="periodo" type="text"  placeholder="Cantidad de Periodos">
            <label for="username">9. Ingresar: Ingresos y Egresos dependiendo de la cantidad de Cantidad de Periodos: </label>
            <input type="text"  placeholder="Ingresos">
            <input type="text"  placeholder="Egresos">
            <!-- PASSWORD INPUT -->
            <td  ><input id="boton-preguntas" type="button" name="btn1" value="Enviar" onclick="obtenerdatos()"></td>

        </form>


    </div>

@endsection
