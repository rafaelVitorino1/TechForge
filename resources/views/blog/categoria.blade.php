@extends('layouts.menus')

@section('content')

    <!-- Main Content -->
    <div class="vh-100" style="padding: 50px">
       <h1>NOME CATEGORIA</h1>

                @foreach( $postagens as $postagem )
                <div class="subforum-row">
                    <div class="subforum-icon subforum-column center">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                    </div>
                    <div class="subforum-description subforum-column">
                        <h5><a class="link-underline-dark fw-bold" style="color: #0383b9" href="{{ url('blog/postagem/' . $postagem->id) }}">{{ $postagem->titulo }}</a></h5>
                        <p type="text">{{ Str::limit(strip_tags($postagem->conteudo), 60) }}</p>
                    </div>
                    <div class="subforum-stats subforum-column center">
                        <span><p class="solid fa fa-commenting"> {{ $postagem->comentarios->count() }} </p></span>
                        <p> | </p>
                        <span><p class="fa fa-thumbs-up" style="padding: 5px"> {{ $postagem->curtidas->count() }}</p></span>
                    </div>
                    <div class="subforum-info subforum-column">
                        Criado por: <a href="">{{ $postagem->user->name }}</a><br>
                        em {{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/Y h:i:s') }}
                    </div>
                </div>
                @endforeach
                {{ $postagens->links() }}
            </div>
        </div>

    </div>
    <!-- #Main Content# -->

@endsection
