@extends('adminlte::page')

@section('title', 'Morpheus Sistema de Cadastro Movel')

@section('content_header')
<ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Galeria</a></li>
      <li><a href="">Cadastrar</a></li>       
  </ol>
@stop

@section('content')
<div class="container">
        <div class="col-xs-12">
<h1><i><b>Cadastro de Site Movel</b></i></h1>

</div>

<a href="{{route('galeria.index')}}"><button class="btn btn-warning">Voltar</button></a>


<br/><br/>
@if(Session::has('msg'))
<div class="alert alert-danger">
{{ Session::get('msg')}}
</div>
@endif



<br/>
<form method="post" enctype="multipart/form-data" action="{{route('galeria.store') }}">

    {!! csrf_field()!!}
    Selecione o Site
<select name="site">
<option value="">Selecione o site</option>
@foreach ( $sites as $category ) 
    <option value="{{$category->id_cad_sit}}">{{$category->Nome}}</option>
@endforeach


</select>
<br />   <br />
    Selecione uma imagem: <input type="file" name="img[]" multiple  />
   <br />

   
<button class="btn btn-primary" type="submit" name="ok" value="upload">Enviar</button>
</form>

</div>
</div>
@stop