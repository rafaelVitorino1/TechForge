<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;

class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = Postagem::orderBy('titulo', 'ASC')->get();
        return view('postagem.index', ['postagens' => $postagens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postagem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $messages = [
            'titulo.required' => 'O campo :attribute é obrigatório!',
            'conteudo.required' => 'O campo :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'titulo' => 'required|min:5',
            'conteudo' => 'required|min:5',
        ], $messages);

        $postagem = new Postagem;
        $postagem->titulo = $request->titulo;
        $postagem->descicao = $request->conteudo;
        $postagem->save();

        return redirect('postagem')->with('status', 'Postagem salva com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $postagem = Postagem::find($id);
        return view('postagem.show', ['postagem' => $postagem]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postagem = Postagem::find($id);
        return view('postagem.edit', ['postagem' => $postagem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($id);
        //dd($request->all());

        $messages = [
            'titulo.required' => 'O campo :attribute é obrigatório!',
            'conteudo.required' => 'O campo :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'titulo' => 'required|min:5',
            'conteudo' => 'required|min:5',
        ], $messages);

        $postagem = Postagem::find($id);
        $postagem->titulo = $request->titulo;
        $postagem->descicao = $request->conteudo;
        $postagem->save();

        return redirect('postagem')->with('status', 'Postagem atualizada com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postagem = Postagem::find($id);
        $postagem->delete();

        return redirect('postagem')->with('status', 'Postagem excluida com sucesso!');
    }
}
