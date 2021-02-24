<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Album;
use App\Tracks;
use Session; 

class AlbumController extends Controller
{ 
    private function albums()
    {
       return Album::orderBy('created_at', 'desc')->get();
    }
    
    public function index()
    {
        return view('albums.index')->withAlbums($this->albums())->withTracks(Tracks::all());
    }
 
    public function get()
    {
        return response()->json($this->albums());
    }

    public function show($id) 
    {
       return view('albums.'.$id); 
    } 

    public function edit(Album $album)
    {
        $albums = json_decode($album);
        return view('albums.editar', compact('albums'));    
    } 

    public function store(Request $request)
    {
        $album = Album::create($request->all());
        return redirect()->route('albums.index');
    } 

    public function update(Request $request, $id)
    {         
        if (Album::where('id', $id)->exists()){
            $album = Album::find($id); 
                        
            $album->nome = is_null($request->nome) ? $album->nome : $request->nome;
            $album->ano = is_null($request->ano) ? $album->ano : $request->ano;
            $album->artista = is_null($request->artista) ? $album->artista : $request->artista;

            $album->save();
            
            $request->session()->flash('status', 'Registro alterado com sucesso!');
            return redirect()->route('albums.index');
    
        }else{
            return response()->json(["message" => "Album não encontrado"], 404);
        }
    }

    public function delete(Album $id)
    {
        $id->delete();
        return redirect()->route('albums.index');

    }

    

}
