<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\VistoriaFoto;
use App\Models\Painel\CadastroSite;

class FotoController extends Controller
{
    private $VistoriaFoto;
    public function __construct(VistoriaFoto $VistoriaFoto)
    {
        $this->middleware('auth');
        
        $this->VistoriaFoto = $VistoriaFoto;
        
    }
    public function index()
    {

        $title = "Galeria de fotos - Vistoria";
        return view ('painel.galeria.index', compact('sites','title'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sites =  \App\Models\Painel\CadastroSite::all();
        
        $title = "Formulario de cadastro de Sites - RCO - Mopheus";
        return view('painel.galeria.create', compact('title','sites'));
    }
 /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        if ($request->hasFile('img')){
            $imagens = $request->file('img');
            $imagens_size = $imagens->getClientSize();
            $imagens_ext = $imagens->getClientOriginalExtension();
            $new_image_name = rand(123456,999999).".".$imagens_ext;
            $destination_path = public_path('/upload');
            $imagens->move($destination_path,$new_image_name);




    }else{
        return back()->with('msg', 'Por favor incluir uma  Imagem...');


    }



    }


}
