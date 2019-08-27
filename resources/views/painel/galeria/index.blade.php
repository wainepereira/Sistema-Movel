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
@if(Session::has('msg'))
<div class="alert alert-success">
{{ Session::get('msg')}}
</div>
@endif
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
<div class="col-sm9">
                
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome do Site:</th>
                        <th scope="col">Quantidade de Fotos</th>
                        <th scope="col" >Ação</th>
                      </tr>
                    </thead>
                   
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    
                  
                    <td>
                    <a href=""class="actions edit"> <span class="fas fa-pencil-alt"></span></a>
                    <a href=""class="actions delete"> <span class="fas fa-trash-alt" ></span>
                    
                    </a>
                    </td>
                  </tr>
                 
                </tbody>
              </table>


@stop
