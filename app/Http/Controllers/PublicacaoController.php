<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\Categoria;

class PublicacaoController extends Controller
{
    public function indexUsuario()
    {
        $perfil = auth()->user();
        $postagens = Postagem::orderBy('id', 'DESC')->where('user_id', $perfil->id)->get();
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $receitas = Postagem::where('user_id', $perfil->id)->get();
        //dd($receitas);
        return view('blog.publi', ['categorias' => $categorias, 'receitas' => $receitas, 'perfil' => $perfil, 'postagens' => $postagens]);
    }

    public function index()
    {
        $perfil = auth()->user();
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $receitas = Postagem::get();
        return view('publicacao.publicar', ['categorias' => $categorias, 'receitas' => $receitas, 'perfil' => $perfil]);
    }

    public function create()
    {
        $perfil = auth()->user();
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $receitas = Postagem::get();
        return view('publicacao.publicar', ['categorias' => $categorias, 'receitas' => $receitas, 'perfil' => $perfil]);
    }


    public function store(Request $request)
    {

        $user_id = auth()->user()->id;

        $messages = [
            'titulo.required' => 'O campo :attribute é obrigatório!',
            'ingredientes.required' => 'O campo :attribute é obrigatório!',
            'preparo.required' => 'O campo :attribute é obrigatório!',
            'imagem.required' => 'O campo :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'titulo' => 'required|min:5',
            'ingredientes' => 'required|min:5',
            'preparo' => 'required|min:5',
            'imagem' => 'required',
        ], $messages);


        $imagem = $request->file('imagem');


        $postagem = new Postagem;
        $postagem->titulo = $request->titulo;
        $postagem->imagem = base64_encode (file_get_contents ($imagem));
        $postagem->ingredientes = $request->ingredientes;
        $postagem->preparo = $request->preparo;
        $postagem->user_id = $user_id;
        $postagem->categoria_id = $request->categoria_id;
        $postagem->save();


        $perfil = auth()->user();
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $receitas = Postagem::get();
        $postagens = Postagem::orderBy('id', 'DESC')->get();
        return view('blog.publi', ['categorias' => $categorias, 'receitas' => $receitas, 'perfil' => $perfil, 'postagens' => $postagens]);

    }


    public function show(string $id)
    {
        $perfil = auth()->user();
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $postagem = Postagem::find($id);
        return view('publicacao.visualizar', ['categorias' => $categorias,'postagem' => $postagem, 'perfil' => $perfil]);
    }


    public function edit(string $id)
    {
        $perfil = auth()->user();
        $postagem = Postagem::find($id);
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        return view('publicacao.editar', ['postagem' => $postagem, 'categorias' => $categorias, 'perfil' => $perfil]);
    }


    public function update(Request $request, string $id)
    {


        $user_id = auth()->user()->id;

        $messages = [
            'titulo.required' => 'O campo :attribute é obrigatório!',
            'ingredientes.required' => 'O campo :attribute é obrigatório!',
            'preparo.required' => 'O campo :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'titulo' => 'required|min:5',
            'ingredientes' => 'required|min:5',
            'preparo' => 'required|min:5',
        ], $messages);

        $imagem = $request->file('imagem');

        $postagem = Postagem::find($id);
        $postagem->titulo = $request->titulo;

        if($imagem != null){
            $postagem->imagem = base64_encode (file_get_contents ($imagem));
        }

        $postagem->ingredientes = $request->ingredientes;
        $postagem->preparo = $request->preparo;
        $postagem->user_id = $user_id;
        $postagem->categoria_id = $request->categoria_id;
        $postagem->save();

        return redirect()->route('receita.usuario');

    }


    public function destroy(string $id)
    {
        $perfil = auth()->user();
        $categorias = Categoria::orderBy('nome', 'ASC')->get();
        $postagem = Postagem::find($id);
        $postagem->delete();

        return redirect()->route('receita.usuario');
    }

}
