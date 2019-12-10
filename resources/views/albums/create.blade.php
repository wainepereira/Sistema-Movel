@extends('adminlte::page')

@section('title', 'Morpheus Sistema de Cadastro Movel')

@section('content_header')

@stop

@section('content')

<div align="Right">

<h3>Album da Vistoria</h3>

</div>
<br><br>
{!! Form::open(['action'=>'AlbumsController@store', 'method'=>'Post', 'enctype' => 'multipart/form-data'])!!}
{{Form::text('name','',['placeholder'=>'Nome do Album','class'=>'form-control'])}}<br><br>
{{Form::text('description','',['placeholder'=>'Descrição do Album','class'=>'md-textarea form-control'])}}<br><br>
{{Form::file('cover_image',['class'=>'btn btn-primary'])}}<br><br>
{{Form::submit('Enviar',['class'=>'btn btn-success'])}}
{!!Form::close()!!}
@stop