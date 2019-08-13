@extends('templetes.templete')

@section('conteudo')
<div class="container">
        <div class="col-xs-12">
<h1><i><b>Cadastro de Site Movel</b></i></h1>
@if( isset ($errors) && count ($errors) > 0 )
<div class="alert alert-danger">
@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
</div>
@endif
<a href="{{route('sitecadastro.index')}}"><button class="btn btn-warning">Voltar</button></a>


<form class="form" method="post" action="{{route('sitecadastro.store')}}">
    {!! csrf_field()!!}
    <div class="form-group">
    <input  type="hidden"  name="user_id" value="{!! auth()->user()->id !!}" class="form-control" >
    </div>
<div class="form-group">

</div>
<div class="form-group">
<input type="text" name="Nome" placeholder="Nome do Site" class="form-control" value="{{old('Nome') }}" >

</div>
<div class="form-group">
<input type="text" name="Endereco" placeholder="Endereço do Site" class="form-control" value="{{ old('Endereco') }}"> 
</div>

<div class="form-group">
<input type="text" name="Detentora" placeholder="Detentora do Site" class="form-control" value="{{old('Detentora') }}" >
</div>

<div class="form-group">
<input type="text" name="tecnologia" placeholder="Tecnologia do Site" class="form-control" value="{{old('tecnologia') }}" >
</div>



<button class="btn btn-primary">Enviar</button>
</form>
</div>
</div>
@endsection