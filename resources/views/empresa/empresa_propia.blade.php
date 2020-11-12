@extends('template2.app')
@section('content')

    <div class="row">
        <div class="col s12">
            <div class="card">
                <table class="table-general-elements row-border" cellspacing="0" width="100%">
                    <thead>
                    <tr>

                        <th>ID</th>

                        <th>Nombre Empresa</th>
                        <th>Categoria</th>
                       <th id="mostrar">
                           <a href=""> Acciones</a>
                           <ul class="submenu">
                               <li class="item">
                                   <a href="">Eliminar</a>
                               </li>
                               <li class="item">
                                   <a href="">Editar</a>
                               </li>
                               <li class="item">
                                   <a href="">Detalle</a>
                               </li>
                           </ul>
                       </th>



                    </tr>

                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
