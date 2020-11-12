@extends('template2.app')
@section('content')
    <div class="center-align">
        <h1>Descarga nuestra App</h1>
        <div class="card" style="width: 18rem;" >
            <img class="card-img-top imagen"  alt="Card image cap" src="{{asset('images/logo2.svg')}}">
            <div class="card-body">
                <a download href={{asset('apk/app-debug.apk')}}>Descargar</a>
            </div>
        </div>
    </div>
@endsection
