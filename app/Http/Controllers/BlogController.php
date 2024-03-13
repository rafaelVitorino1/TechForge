<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\Categoria;
use App\Models\User;

class BlogController extends Controller
{
    
    public function index()
    {
        $postagens = Postagem::orderBy('id', 'DESC')->get();
        return view('welcome', ['postagens' => $postagens]);
    }

    public function categoria(){
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('blog.categoria', ['categorias' => $categorias]);
    }

    public function categoriaPostagem($id){
        $postagens = Postagem::where('categoria_id', $id)->orderBy('id', 'DESC')->get();
        return view('welcome', ['postagens' => $postagens]);
    }

    public function autor(){
        $autores = User::orderBy('name', 'ASC')->get();
        return view('blog.autor', ['autores' => $autores]);
    }

    public function autorPostagem($id){
        $postagens = Postagem::where('user_id', $id)->orderBy('id', 'DESC')->get();
        return view('welcome', ['postagens' => $postagens]);
    }


}
