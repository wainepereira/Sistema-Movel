@extends('templetes.templete')

@section('conteudo')

<div class="container">
        <div class="col-xs-12">
            <p>
               <h2>
                  <br/>
                     <center>  Lista de Site cadastrado  </center>                        
                </h2>
            </p>
               <a href="{{route('sitecadastro.create')}}"> <button type="button" class="btn btn-outline-primary btn-space "><i class="ícone ion-md-add"> Cadastrar</i></button></a>
                <br/>
          </div>   
   

            <div class="col-sm9">
                
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome:</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Detentora</th>
                    <th scope="col">Tecnologia</th>
                    <th scope="col" >Ação</th>
                  </tr>
                </thead>
                @foreach($sites as $site)
                <tr>
                    <th scope="row">{{$site->id_cad_sit}}</th>
                    <td>{{$site->Nome}}</td>
                    <td>{{$site->Endereco}}</td>
                    <td>{{$site->Detentora}}</td>
                    <td>{{$site->tecnologia}}</td>
                    <td>
                    <a href="{{route('sitecadastro.edit',$site->id_cad_sit)}}"class="actions edit"> <span class="icon ion-md-create" ></span>
                  
              </a>
              
              <a href="{{route('sitecadastro.show',$site->id_cad_sit)}}"class="actions delete"> <span class="icon ion-md-trash" ></span>
                    
                    </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {!! $sites->links() !!}
              </div>
        </div>
</div>
@endsection

