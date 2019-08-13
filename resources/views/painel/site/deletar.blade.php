@extends('adminlte::page')

@section('title', 'Morpheus Sistema de Cadastro Movel')

@section('content_header')
    <ol class="breadcrumb">
      <li><a href="">Dashboard</a></li>
      <li><a href="">Painel</a></li>
      <li><a href="">Deletar</a></li>       
  </ol>
@stop

@section('content')
<div class="container">
<div class="container">
        <div class="col-xs-12">
        <a href="{{route('sitecadastro.index')}}"><button class="btn btn-warning">Voltar</button></a>
<h1><i><b>Você esta deletando o Site {{$cadastro->Nome}}</b></i></h1>

@if( isset ($errors) && count ($errors) > 0 )
<div class="alert alert-danger">
@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
</div>
@endif
            
                <br/>
          </div>   
        <tr>
        <td>
        Caro usuario tem  Certeza que quer deletar este Site..
        </td>
        </tr>
        <form class="form" method="post" action="{{route('sitecadastro.destroy', $cadastro->id_cad_sit)}}">
{{method_field('DELETE')}}
{!! csrf_field()!!}
<center>
<a value="submit"> <button  class="btn btn-danger">Deletar</button></a>
</center>
</form>
 </div>

 @stop

