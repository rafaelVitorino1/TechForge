<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;
use App\Models\Favorito;

class SalvosController extends Controller
{
    public function index()
    {
        $perfil = auth()->user();
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $postagem = Postagem::get();
        $favoritos = Favorito::where('user_id', auth()->user()->id)->get();
        return view('blog.salvos', ['categorias' => $categorias, 'postagem' => $postagem, 'perfil' => $perfil, 'favoritos' => $favoritos]);
    }

    public function favoritar($id)
    {

        $favorito_exit = Favorito::where('user_id', auth()->user()->id)->where('postagem_id', $id)->exists();

        if(!$favorito_exit){
            $favorito = new Favorito;
            $favorito->user_id = auth()->user()->id;
            $favorito->postagem_id = $id;
            $favorito->save();
        }

        return back()->withInput();
    }
}
