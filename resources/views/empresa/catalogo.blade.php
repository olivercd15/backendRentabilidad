@extends('template2.app')

@section('content')
    <div>
        <h1>Catálogos De Empresa</h1>

            <thead>
                <tr>
                    <div class="card" style="width: 18rem;" >
                        <img class="card-img-top imagen" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRvfOXnpVyH_9oIBmyi35dlkh7h2PxloztNSQ&usqp=CAU" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title "><label class="fuerte"> Nombre propietario:</label><span class="parrafo">Rosanyela Hurtado</span></h5>

                            <h5 class="card-title"><label class="fuerte">Telefono:</label><span class="parrafo">515151</span></h5>

                            <h5 class="card-title"><label class="fuerte">Estado: </label><span class="parrafo">Activo</span></h5>

                            <h5 class="card-title"><label class="fuerte">Descripcion:</label><span class="parrafo">Restaurante de comida rapida</span> </h5>

                            <a href="mapas" class="btn btn-primary " >Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;" >
                        <img class="card-img-top imagen" src="https://live.mrf.io/statics/i/ps/www.muycomputer.com/wp-content/uploads/2018/01/Burger-King.jpg?width=1200&enable=upscale" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title "><label class="fuerte"> Nombre propietario:</label><span class="parrafo">Maykol Sanchez</span></h5>

                            <h5 class="card-title"><label class="fuerte">Telefono:</label><span class="parrafo">61616131</span></h5>

                            <h5 class="card-title"><label class="fuerte">Estado: </label><span class="parrafo">Activo</span></h5>

                            <h5 class="card-title"><label class="fuerte">Descripcion:</label><span class="parrafo">Restaurante de comida rapida</span> </h5>

                            <a href="mapas" class="btn btn-primary " >Go somewhere</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;" >
                        <img class="card-img-top imagen" src="data:image/png;base64,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" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title "><label class="fuerte"> Nombre propietario:</label><span class="parrafo">Oliver Carranza adsda</span></h5>

                            <h5 class="card-title"><label class="fuerte">Telefono:</label><span class="parrafo">7564915</span></h5>

                            <h5 class="card-title"><label class="fuerte">Estado: </label><span class="parrafo">Activo</span></h5>

                            <h5 class="card-title"><label class="fuerte">Descripcion:</label><span class="parrafo">Empresa que ofrece servicios de telecomunicaciones</span> </h5>

                            <a href="mapas" class="btn btn-primary " >Go somewhere</a>
                        </div>
                    </div>

                    <div class="card" style="width: 18rem;" >
                        <img class="card-img-top imagen" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQuOQtY13lKNDV_lg53WGvDjIpB-yZKQIMKGQ&usqp=CAU" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title "><label class="fuerte"> Nombre propietario:</label><span class="parrafo">Julio Cesar Mamani</span></h5>

                            <h5 class="card-title"><label class="fuerte">Telefono:</label><span class="parrafo">88494949</span></h5>

                            <h5 class="card-title"><label class="fuerte">Estado: </label><span class="parrafo">Activo</span></h5>

                            <h5 class="card-title"><label class="fuerte">Descripcion:</label><span class="parrafo">Establecimiento que ofrece sus instalaciones para descansar</span> </h5>

                            <a href="mapas" class="btn btn-primary " >Go somewhere</a>
                        </div>
                    </div>
                </tr>
            </thead>

    </div>


@endsection
