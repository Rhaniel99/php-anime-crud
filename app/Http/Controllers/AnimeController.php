<?php

namespace App\Http\Controllers;
use App\Http\Requests\AnimeRequest;
use App\Models\ModelAnime;
use App\Models\ModelStudio;

class AnimeController extends Controller
{
    private $obStudio;
    private $obAnime;

    public function __construct()
    {
        // Objetos referentes ao banco de dados.
        $this->obStudio = new ModelStudio();
        $this->obAnime = new ModelAnime();
    }

    public function index()
    {

        $anime=$this->obAnime->paginate(10);
        return view('anime', compact('anime')); 
    }

    public function create()
    {
        // manda todos os studios, para pôr no select.
        $studios=$this->obStudio->all();
        return view('createanime', compact('studios'));
    }

    public function store(AnimeRequest $request)
    {
        $CadAnime=$this->obAnime->create([
            'nome'=>$request->nome,
            'ep_qtd'=>$request->ep_qtd,
            'duracao_ep'=>$request->duracao_ep,
            'id_studio'=>$request->id_studio
        ]);
        if($CadAnime){
            return redirect('anime');
             }
    }

    // Dados especificos
    public function show($id)
    {
        // Pega o ID especifico na tabela anime
        $anime=$this->obAnime->find($id);
        return view('showanime', compact('anime'));
    }

    public function edit($id)
    {
        $animes=$this->obAnime->find($id);
        $studios=$this->obStudio->all();
        return view('createanime',compact('animes','studios'));
    
    }

    public function update(AnimeRequest $request, $id)
    {
         $this->obAnime->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'ep_qtd'=>$request->ep_qtd,
            'duracao_ep'=>$request->duracao_ep,
            'id_studio'=>$request->id_studio
    ]);
    return redirect('anime');
    }
    
    public function destroy($id)
    {
    $del=$this->obAnime->destroy($id);
    return($del)?"sim":"não";
    }
}
