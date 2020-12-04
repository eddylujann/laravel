@extends('layout') 

{{-- Se pone un nombre al section para luego incrustaelo al layout --}}
@section('content-welcome')
    {{--------------------------------------------------------
        Productos destacados
    --------------------------------------------------------
    
    {{-- <div class="card text-center"> --}}
    <div class="text-center">
        <div class="card-body">
            <div class="container">
                <h1 class="dll-text-blue"> <b>Productos destacados</b> </h1>
                <h5>Bienvenido a tu tienda de móviles libres y accesorios para teléfonos, smartphones o tablets. 
                    En MaxMovil puedes comprar online una gran variedad de dispositivos de electrónica con pago a plazos opcional. 
                    Puedes recibir tu pedido desde 24 horas.
                </h5>
            </div>
        </div>
    </div>

    <br>
    <div class="container">
        <div class="card-deck">
            {{-- 312 x 200 --}}
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/destacados/laptop.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title dll-text-blue">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/destacados/w4.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title dll-text-blue">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/destacados/water.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title dll-text-blue">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
    <br>

    {{--------------------------------------------------------
        LO MÁS VENDIDOS EN DLLMARKET
    --------------------------------------------------------}}
    <div class="text-center ">
        <div class="card-body">
            <div class="container">
                <h1 class="dll-text-blue"> <b>Lo más vendidos en DllMarket </b> </h1>
                <h5>Bienvenido a tu tienda de móviles libres y accesorios para teléfonos, smartphones o tablets. 
                    En MaxMovil puedes comprar online una gran variedad de dispositivos de electrónica con pago a plazos opcional. 
                    Puedes recibir tu pedido desde 24 horas.
                </h5>
            </div>
        </div>
    </div>

    <div class="container">
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
            <!--Controls-->
            <div class="controls-top text-center">
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left float-left"></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right float-right"></i></a>
                <br>
            </div>
            <!--/.Controls-->
    
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
                <li data-target="#multi-item-example" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
    
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{ asset('images/vendidos/allInOne.png') }}" alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{ asset('images/vendidos/hqdefault.jpg') }}" alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{ asset('images/vendidos/scooter.jpg') }}" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.First slide-->
    
                <!--Second slide-->
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Second slide-->
            </div>
            <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>
    <br>

    {{--------------------------------------------------------
        PRODUCTOS ESTRELLAS
    --------------------------------------------------------}}
    <div class="text-center">
        <div class="card-body">
            <div class="container">
                <h1 class="dll-text-blue"><b>Productos Estrellas</b> </h1>
                <h5>Bienvenido a tu tienda de móviles libres y accesorios para teléfonos, smartphones o tablets. 
                    En MaxMovil puedes comprar online una gran variedad de dispositivos de electrónica con pago a plazos opcional. 
                    Puedes recibir tu pedido desde 24 horas.
                </h5>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/estrella/w4.jpg') }}" alt="Card image cap">
                <div class="card-footer text-center">
                    <small class="text-muted">Apple iPhone 11 (256GB) - (Producto) ROJO (sin SIM)</small>
                    <h2 class="dll-text-black"> <b>800.99 €</b> </h2>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/estrella/w7.png') }}" alt="Card image cap">
                <div class="card-footer text-center">
                    <small class="text-muted">Oppo A5 2020 3/64GB Dazzling White Libre</small>
                    <h2 class="dll-text-black"> <b>400.99 €</b> </h2>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection