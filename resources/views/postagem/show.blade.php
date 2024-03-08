@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem</div>

                <div class="card-body">
                    <strong>Título:</strong>          {{ $postagem->titulo }}<br>
                    <strong>Conteúdo:</strong>          {{ $postagem->conteudo }}<br>
                    <strong>Criação:</strong>       {{ $postagem->created_at }}<br>
                    <strong>Atualização:</strong>   {{ $postagem->updated_at }}<br>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
