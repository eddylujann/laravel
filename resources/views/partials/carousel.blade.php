{{-- CARRUSEL DE IMAGENES --}}

<div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item item active">
            <img class="d-block w-100" src="{{ asset('images/portada/img1.jpg') }}" alt="Chania"  width="100%">
        </div>
        <div class="carousel-item item">
            <img class="d-block w-100" src="{{ asset('images/portada/img2.jpg') }}" alt="Chania"  width="100%"> 
        </div>
        <div class="carousel-item item">
            <img class="d-block w-100" src="{{ asset('images/portada/img3.jpg') }}" alt="Chania"  width="100%">
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


