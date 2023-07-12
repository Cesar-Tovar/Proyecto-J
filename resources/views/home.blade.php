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
        <div class="col-md-12 text-center my-5" id="Nosotros">
            <h2 class="animate__animated animate__bounceInDown">Nosotros</h2>
            <p class="animate__animated animate__bounceInDown">Nosotros somos...</p>
        </div>
        <div class="col-md-12 text-center my-5" id="Productos">
            <div class="row align-items-center">
                <h2 class="animate__animated animate__bounceInUp">Productos</h2>
                @foreach($prod as $pro)
                    <div class="col-md-6 p-2 text-center col-sm-6 col-lg-4 col-xl-3">
                        <div class="card mb-3 shadow mb-5 bg-white rounded">
                            <div class="objetfitcover">
                                <img src="{{ asset('archivos/' .$pro->imagen) }}" class="card-img-top img" alt="imagen">
                            </div>
                            <div class="card-body">
                                <p class="card-text"><b>Nombre:{{$pro->nombre}}</b></p>
                                <p class="card-text">Descripción:<br>{{$pro->descripcion}}</p>
                                <p class="card-text">${{$pro->precio}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-12 text-center mb-5">
            <div class="row">
                <div class="col-6">
                    <h2 class="animate__animated animate__backInLeft">Contactanos</h2>
                    <br><br>
                    <b class="animate__animated animate__zoomIn">Correo electrónico:</b>
                    <p></p><br>
                    <b class="animate__animated animate__zoomIn">Teléfono:</b>
                    <p></p><br>
                    <b class="animate__animated animate__zoomIn">Dirección</b>
                    <p></p><br>
                    <b class="animate__animated animate__zoomIn">Redes Sociales</b><br>
                    <a class="btn btn-square btn-outline-ligth btn-social animate__animated animate__bounceInUp" href=""><i class="bi bi-facebook"></i></i></a>
                    <a class="btn btn-square btn-outline-ligth btn-social animate__animated animate__bounceInUp" href=""><i class="bi bi-instagram"></i></i></a>
                    <a class="btn btn-square btn-outline-ligth btn-social animate__animated animate__bounceInUp" href=""><i class="bi bi-twitter"></i></i></a>
                    <a class="btn btn-square btn-outline-ligth btn-social animate__animated animate__bounceInUp" href=""><i class="bi bi-linkedin"></i></i></a>
                </div>
                <div class="col-6">
                    <h2 class="animate__animated animate__backInRight">Nos encontramos en:</h2>
                    <iframe class="animate__animated animate__zoomIn" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1634.7461289773141!2d-99.46966714380133!3d19.344335526247384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDIwJzM5LjYiTiA5OcKwMjgnMDYuMiJX!5e1!3m2!1ses-419!2smx!4v1687982765119!5m2!1ses-419!2smx"
                    width="500" height="350" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
@endsection
