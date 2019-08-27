<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\VistoriaFoto;
use App\Models\Painel\CadastroSite;

class FotoController extends Controller
{
    private $VistoriaFotos;
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
            $imagens_array = $request->file('img');
            $array_len = count($imagens_array);

            for ($i=0; $i < $array_len ; $i++){
           
                $imagens_size = $imagens_array[$i]->getClientSize();
                $imagens_ext = $imagens_array[$i]->getClientOriginalExtension();
                $new_image_name = rand(123456,999999).".".$imagens_ext;
                $destination_path = public_path('/upload');
                $imagens_array[$i]->move($destination_path,$new_image_name);
                $Cad_site = $_POST['site'];
                   
                $VistoriaFoto = New VistoriaFoto;
                $VistoriaFoto->Nome = $new_image_name;
                $VistoriaFoto->data = date("Y-m-d H:m:s");
                $VistoriaFoto->Comentario = $imagens_size;
                $VistoriaFoto->cadastro_id = $Cad_site;
                $VistoriaFoto->save();
            }
            return back()->with('msg', 'Salvo com sucesso' );
            

    }else{
        return back()->with('msg', 'Por favor incluir uma  Imagem...');


    }



    }


}
