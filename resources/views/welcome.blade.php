@extends('layouts.menus')

@section('content')

    <!-- Main Content -->
        @foreach($categorias as $categoria)
        <div class="container box-container" style="padding: 0px">
            <div class="subforum">
                <div class="subforum-title">
                    <o>{{ $categoria->nome }}</a>
                </div>
                @foreach( $categoria->postagens as $postagem )
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                    </div>
                    <div class="subforum-description subforum-column">
                        <h5><a href="{{ url('blog/postagem/' . $postagem->id) }}">{{ $postagem->titulo }}</a></h5>
                        <p type="text">{{ Str::limit(strip_tags($postagem->conteudo), 60) }}</p>
                    </div>
                    <div class="subforum-stats subforum-column center">
                        <span>24 Posts | 12 Topics</span>
                    </div>
                    <div class="subforum-info subforum-column">
                        Criado por: <a href="">{{ $postagem->user->name }}</a><br>
                        em {{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/Y h:i:s') }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    <!-- #Main Content# -->
@endsection
