<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tracks;
use Session;

class TracksController extends Controller
{
    private function tracks()
    {
        return Tracks::orderBy('created_at', 'desc')->get();
    }

    public function index()
    {
        return view('tracks.index')->withTracks($this->tracks());
    }

    public function get()
    {
        return response()->json($this->tracks());
    }

    public function show($id) 
    {
       return view('tracks.'.$id); 
    } 

    public function edit(Tracks $track)
    {
        $tracks = json_decode($track);
        return view('tracks.editar', compact('tracks'));
    }

    public function store(Request $request)
    {
        $track = Tracks::create($request->all());
        return redirect()->route('tracks.index')->with('message','Registro salvo!'); 
    }

    public function update(Request $request, $id)
    {
        if (Tracks::where('id', $id)->exists()){
            $track = Tracks::find($id); 
                        
            $track->nome = is_null($request->nome) ? $track->nome : $request->nome;
            $track->duracao = is_null($request->duracao) ? $track->duracao : $request->duracao;
            $track->album = is_null($request->album) ? $track->album : $request->album;
            $track->ordem = is_null($request->ordem) ? $track->ordem : $request->ordem;
            $track->save();
            
            $request->session()->flash('status', 'Registro alterado com sucesso!');
            return redirect()->route('tracks.index');
    
        }else{
            return response()->json(["message" => "Faixa não encontrada"], 404);
        }
    }
      
    public function delete(Tracks $id)
    {
        $id->delete();
        return redirect()->route('tracks.index');
    }

}
