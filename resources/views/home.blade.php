@extends('layouts.app')

@section('content')

<body>
    <div class="container">
    <div class="row">
        <div id="Inicio" class="carousel slide carousel-fade mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="Imagen 1">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Etiqueta de la primera diapositiva</h5>
                  <p>Algún contenido placeholder representativo para la primera diapositiva.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="Imagen 2">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Etiqueta de la segunda diapositiva</h5>
                  <p>Algún contenido placeholder representativo para la segunda diapositiva.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="Imagen 3">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Etiqueta de la tercera diapositiva</h5>
                  <p>Algún contenido placeholder representativo para la tercera diapositiva.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
        <div class="col-md-12 text-center my-5">
            <h2>Nosotros</h2>
            <p>Nosotros somos...</p>
        </div>
    </div>
    </div>
</body>

@endsection
