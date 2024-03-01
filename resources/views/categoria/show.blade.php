@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria</div>

                <div class="card-body">
                    <strong>Nome:</strong>          {{ $categoria->nome }}<br>
                    <strong>Criação:</strong>       {{ $categoria->created_at }}<br>
                    <strong>Atualização:</strong>   {{ $categoria->updated_at }}<br>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
