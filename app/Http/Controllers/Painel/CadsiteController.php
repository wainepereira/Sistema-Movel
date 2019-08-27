<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\CadastroSite;


class CadsiteController extends Controller
{
    private $CadastroSite;
    private $totalpagina  = 10;
    public function __construct(CadastroSite $CadastroSite)
    {
        $this->middleware('auth');

        $this->CadastroSite = $CadastroSite;
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Lista de site Cadastrado";
        $sites = $this->CadastroSite->paginate($this->totalpagina);

        return view ('painel.site.index', compact('sites','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Formulario de cadastro de Sites - RCO - Mopheus";
        return view('painel.site.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
      $dataForm = $request->except('_token');
$messages = [
    
    'Nome.required' => 'Este campo Nome e Obrigatorio!',
    'Endereco.required' => 'Este campo Endereço e Obrigatorio!',
    'Detentora.required' => 'Este campo Detentora e Obrigatorio!',
    'tecnologia.required' => 'Este campo Tecnologia e Obrigatorio!',

];

      $validate = validator($dataForm, $this->CadastroSite->rules, $messages);
        if ($validate->fails()) {
            return redirect()
                    ->route('sitecadastro.create')
                    ->withErrors($validate)
                    ->withInput();
        }


     
    $criar = $this->CadastroSite->create($dataForm);
    
            if($criar)
            return redirect ()-> route('sitecadastro.index');
            else
            return redirect ()-> route('sitecadastro.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_cad_sit)
    {
        $cadastro = $this->CadastroSite->find($id_cad_sit); 

        return view('painel.site.deletar',compact('id_cad_sit', 'cadastro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_cad_sit)
    {
    
     $cadastro = $this->CadastroSite->find($id_cad_sit); 


     $title = "Editando o Cadastro {$cadastro->Nome}";

     return view('painel.site.create-edit', compact('title','cadastro'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cad_sit)
    {
        $dataForm = $request->except('_token');

        $cadastroUpdate = $this->CadastroSite->find($id_cad_sit);

        $update = $cadastroUpdate->update($dataForm);
        if ($update)
            return redirect()->route('sitecadastro.index');
        else
            return redirect()->route('siteCadastro.edit',$id_cad_sit)->with(['errors'=> 'falha ao editar este arquivo...' ]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cad_sit)
    {
        $cadastrodelete = $this->CadastroSite->find($id_cad_sit);

        $delete = $cadastrodelete->delete();

        if($delete)
            return redirect()->route('sitecadastro.index');

            else
            return redirect()->route('sitecadastro.show', $id_cad_sit )->with(['errors'=>'Falha ao deleter ']);

    }
}
