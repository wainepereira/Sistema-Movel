@extends('adminlte::page')

@section('title', 'Morpheus Sistema de Cadastro Movel')

@section('content_header')
    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Galeria</a></li>
      <li><a href="">Lista</a></li>       
  </ol>
@stop

@section('content')
<div class="container">
        <div class="col-xs-12">
            <p>
               <h2>
                  <br/>
                     <center> Galeria de fotos </center>                        
                </h2>
            </p>
               <a href="{{route('galeria.create')}}"> <button type="button" class="btn btn-primary btn-space "><i class="ícone ion-md-add"> Cadastrar</i></button></a>
                <br/>
          </div>
</div>

@stop
