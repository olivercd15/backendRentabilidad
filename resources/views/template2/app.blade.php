<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Software de Rentabilidad</title>

    <!-- Import External Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Import Internal Styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin-materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jqvmap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/master.css')}}">
    <link rel="shortcut icon" href="{{asset('images/logo2.svg')}}"/>

    <!-- Import Google Material Icons-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Import External Fullcalendar-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<script src="{{asset('js/app.js')}}"></script>
<header id="app">
    <ul id="sidenav-left" class="sidenav white">
        <li><div class="user-view">
                <div class="background dark-secondary-background">
                </div>
                <a href="#user"><img class="circle" src="{{asset('images/logo2.svg')}}"></a>
                <a href="#name"><span class="white-text name">

                    </span>
                </a>
                <a href="#email"><span class="white-text email"></span></a>
            </div>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">

                <li class="bold waves-effect"><a class="collapsible-header">personal<i class="material-icons chevron">chevron_left</i></a>
                    <div class="collapsible-body">
                        <ul>

                                <li><a href="indexusuario" class="waves-effect">Mis datos<i class="material-icons">list</i></a></li>
                            <li><a href="editarusuario" class="waves-effect">Editar mis datos<i class="material-icons">list</i></a></li>

                                <li><a href="empresapopia" class="waves-effect">Mis empresas<i class="material-icons">list</i></a></li>

                        </ul>


                <li class="bold waves-effect"><a class="collapsible-header">Empresas<i class="material-icons chevron">chevron_left</i></a>
                    <div class="collapsible-body">
                        <ul >
                            <li><a href="indexempresa" class="waves-effect">Ver Empresas<i class="material-icons">list</i></a></li>
                            <li><a href="registroempresa" class="waves-effect">Registrar Empresa<i class="material-icons">list</i></a></li>
                            <li><a href="detalleempresa" class="waves-effect">Detalle Empresa<i class="material-icons">list</i></a></li>
                            <li><a href="preguntas" class="waves-effect">Analisis del Negocio<i class="material-icons">list</i></a></li>

                        </ul>
                    </div>
                </li>
                <li class="bold waves-effect"><a class="collapsible-header" href="aplicacion">Descargar App<i class="material-icons chevron">chevron_left</i></a>

            </ul>
        </li>
    </ul>
</header>
<div ></div>
<nav class="navbar nav-extended no-padding dark-primary-background">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo dark-primary-color">SOFTWARE DE RENTABILIDAD</a>
        <ul id="nav-mobile" class="right">
            <form action="#" method="#">
                @csrf
                <li class="hide-on-med-and-down"><a href="index" class="waves-effect dark-primary-color"><i  class="material-icons">home</i></a></li>
                <li ><button type="submit" class="waves-effect dark-primary-color"><i class="material-icons">close</i></button></li>
            </form>
        </ul>

         <b-alert></b-alert>
        <a href="#" data-target="sidenav-left" class="sidenav-trigger left "><i class="material-icons dark-primary-color ">menu</i></a>
    </div>
</nav>

<main class="white"> <!-- contenido de toda la pagina -->
    <div  class="container">
        @yield('content')
    </div>

</main>


<!--JavaScript at end of body for optimized loading-->
<!-- Import Internal Materialize -->
<script rel="script" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script rel="script" type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
<script rel="script" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.min.js"></script>

<!-- External libraries -->
<!-- jqvmap -->
<script rel="script" type="text/javascript" src="{{asset('js/jqvmap/jquery.vmap.min.js')}}"></script>
<script rel="script" type="text/javascript" src="{{asset('js/jqvmap/jquery.vmap.world.js')}}" charset="utf-8"></script>
<script rel="script" type="text/javascript" src="{{asset('js/jqvmap/jquery.vmap.sampledata.js')}}"></script>

<!-- ChartJS -->
<script rel="script" type="text/javascript" src="{{asset('js/Chart.js')}}"></script>
<script rel="script" type="text/javascript" src="{{asset('js/Chart.Financial.js')}}"></script>


<!-- Import External Google Jquery-->
<!--<script rel="script" type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>-->
<script rel="script" type="text/javascript" src="{{asset('js/datatable.js')}}"></script>
<script rel="script" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.js"></script>
<script rel="script" type="text/javascript" src="{{asset('js/masonry.pkgd.min.js')}}"></script>


<!-- Initialization script -->
<script rel="script" type="text/javascript" src="{{asset('js/admin.js')}}"></script>
<script rel="script" type="text/javascript" src="{{asset('js/page-scripts/table-custom-elements.js')}}"></script>
<script rel="script" type="text/javascript" src="{{asset('js/init.js')}}"></script>

</body>
</html>
