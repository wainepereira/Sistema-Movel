@extends('adminlte::page')

@section('title', 'Morpheus Sistema de Cadastro Movel')

@section('content_header')

@stop

@section('content')
@if(count($galerias)> 0)
<?php
$colcout = count($galerias);
$i=1
?>
    <div id="albums">
        <div class="row text center">
            @foreach($galerias as $dados)
                @if($i==$colcout)
                <div class='medium-4 columns end'>
                    <a href="/albums/{{$dados->id}}">
                    <img class="thumbnail" src="storage/album_covers/{{$dados->cover_image}}" height="212" width="400" alt="{{$dados->name}}">
                    </a>
                    <br>
                    <h4>{{$dados->name}}</h4>
                    @else
                        <div class="medium-4 columns">
                        <a href="/albums/{{$dados->id}}">
                        <img class="thumbnail" src="storage/album_covers/{{$dados->cover_image}}" height="212" width="400" alt="{{$dados->name}}" >
                        </a>
                        <br>
                        <h4>{{$dados->name}}<h4>
                        @endif
                        @if($i % 3 == 0)
                        </div></div>
                        <div class="row text-center">
                        @else
                        </div>
                        @endif
                        <?php $i ++ ?>
                        @endforeach
                        </div>
                    </div>
                @else
            <p> Não tem Album disponivel</p>
        @endif

@stop