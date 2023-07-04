@extends('layouts.app')

@section('content')

<div class="container">
    <br>
    <div class="row align-items-center">
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
@endsection
