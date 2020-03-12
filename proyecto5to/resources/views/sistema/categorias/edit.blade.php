@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h3> Creacion  de Categorias<h3>
                </div>
                <div class="card-body">

                   {!! Form::model($categoria, ['route'=>['categorias.update',$categoria->id],'method'=>'PUT'])!!}



                   @include('sistema.categorias.parciales.formulario')
                   {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
