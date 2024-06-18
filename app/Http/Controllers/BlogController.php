<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\Categoria;
use App\Models\User;
use App\Models\Comentario;
use App\Models\Curtida;

class BlogController extends Controller
{

    public function index()
    {

        //$postagens = Postagem::orderBy('id', 'DESC')->get();
        //dd('teste');
        // foreach ($categorias as $key => $value) {
        //    dd($value->postagens);
        // }
        //return view('welcome', ['postagens' => $postagens]);
        //dd($count_user);

        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $count_user = User::count();
        $count_postagem = Postagem::count();


        return view('welcome', ['categorias' => $categorias, 'count_user' => $count_user, 'count_postagem' => $count_postagem]);

    }


    public function categoria(){
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('blog.categoria', ['categorias' => $categorias]);
    }

    public function categoriaPostagem($id){
        $postagens = Postagem::where('categoria_id', $id)->orderBy('id', 'DESC')->get();
        return view('blog.categoria', ['postagens' => $postagens]);
    }

    public function autor(){
        $autores = User::orderBy('name', 'ASC')->get();
        return view('blog.autor', ['autores' => $autores]);
    }

    public function autorPostagem($id){
        $postagens = Postagem::where('user_id', $id)->orderBy('id', 'DESC')->get();
        return view('welcome', ['postagens' => $postagens]);
    }

    public function postagem($id){
        $postagem = Postagem::find($id);
        return view('blog.postagem', ['postagem' => $postagem]);
    }

    public function postagemComentario(Request $resquest, $id){

        $comentario = new Comentario;
        $comentario->conteudo = $resquest->conteudo;
        $comentario->user_id = auth()->user()->id;
        $comentario->postagem_id = $id;
        $comentario->save();

        return redirect()->route('blog.postagem', $id);

    }

    public function curtida($id){

        $curtidaExistente = Curtida::where('user_id', auth()->user()->id)->where('postagem_id', $id)->exists();

        //dd($curtidaExistente);

        if(!$curtidaExistente){
            $curtida = new Curtida;
            $curtida->user_id = auth()->user()->id;
            $curtida->postagem_id = $id;
            $curtida->save();
        }

        //return redirect()->route('blog.postagem', $id);
        return back()->withInput();

    }


}
