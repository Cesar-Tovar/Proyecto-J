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
            <h2>Nosotros</h2>
            <p>Nosotros somos...</p>
        </div>
        <div class="col-md-12 text-center my-5" id="Productos">
            <div class="row">
                <h2>Productos</h2>
                <div class="col-3">
                    <p>Producto 1</p>
                </div>
                <div class="col-3">
                    <p>Producto 2</p>
                </div>
                <div class="col-3">
                    <p>Producto 3</p>
                </div>
                <div class="col-3">
                    <p>Producto 4</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center mb-5">
            <div class="row">
                <div class="col-6">
                    <h2>Contactanos</h2>
                    <br><br><br>
                    <b>Correo electrónico:</b>
                    <p></p><br>
                    <b>Teléfono:</b>
                    <p></p><br>
                    <b>Dirección</b>
                    <p></p><br>
                    <b>Redes Sociales</b><br>
                    <a class="btn btn-square btn-outline-ligth btn-social" href=""><i class="bi bi-facebook"></i></i></a>
                    <a class="btn btn-square btn-outline-ligth btn-social" href=""><i class="bi bi-instagram"></i></i></a>
                    <a class="btn btn-square btn-outline-ligth btn-social" href=""><i class="bi bi-twitter"></i></i></a>
                    <a class="btn btn-square btn-outline-ligth btn-social" href=""><i class="bi bi-linkedin"></i></i></a>
                </div>
                <div class="col-6">
                    <h2>Nos encontramos en:</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1634.7461289773141!2d-99.46966714380133!3d19.344335526247384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDIwJzM5LjYiTiA5OcKwMjgnMDYuMiJX!5e1!3m2!1ses-419!2smx!4v1687982765119!5m2!1ses-419!2smx" width="500" height="350" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        {{-- <table class="default">
            <tr>
                <td>
                    <div class="col-6">
                        <h2>Contacto:</h2>
                        <p>Telefono</p>
                        <p>Direccion</p>
                        <p>Correo</p>
                        <p>Redes sociales</p>
                    </div>
                </td>
                <td>
                    <div class="col-5">
                        <h2>Nos encontramos en:</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1634.7461289773141!2d-99.46966714380133!3d19.344335526247384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDIwJzM5LjYiTiA5OcKwMjgnMDYuMiJX!5e1!3m2!1ses-419!2smx!4v1687982765119!5m2!1ses-419!2smx" width="300" height="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </td>
            </tr>
        </table> --}}
    </div>
    </div>
</body>

@endsection
