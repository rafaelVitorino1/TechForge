@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Olá Mundo!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @can('is_admin')
                        <div class="alert alert-success" role="alert">
                            Você é um administrador!
                        </div>
                    @else
                        <div class="alert alert-success" role="alert">
                            Você é um usuario normal!
                        </div>
                    @endcan

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
