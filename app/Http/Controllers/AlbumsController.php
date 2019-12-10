<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
  
    
    public function index()
    {
        $ftos = album::get();
        
      
        return view ('albums.index',['galerias'=>$ftos]) ;
    }
    public function create()
    {
        return view ('albums.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required',
            'conver_imge'=> 'image|1999'

        ]);
            //vai fazer o get da extensao do arquivo.
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $filenameToStore = rand(123456,999999).'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);


            //criar o album
            $album = new album;

            $album->name = $request->input('name');
            $album->description = $request->input('description');
            $album->cover_image = $filenameToStore;

            $album->save();


        return redirect('/albums')->with('success', 'Album criado com sucesso!');
    }
}
