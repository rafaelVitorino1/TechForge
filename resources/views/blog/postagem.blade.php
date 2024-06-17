@extends('layouts.menus')

@section('content')

                        <!-- Conteudo da Postagem-->
                        <article>
                            <div class="center box-container container" style="padding: 0px">

                                <div class="user-container border-end border-dark align-self-stretch" style="padding: 10px">
                                    <img src="{{ url('images/img_avatar.png') }}" class="rounded-circle mb-3 center" style="width: 110px;" alt="Avatar" />
                                    <h5 class="mb-2 center"><strong>{{ $postagem->user->name }}</strong></h5>
                                    <p class="text-muted center"><span class="badge bg-primary">Membro</span></p>
                                </div>

                                <div class="card border-0 cont-container container align-self-stretch" style="margin: 0px; padding: 5px">
                                    <div class="card-header " style="border-color: #2e2d2d; padding: 5px">
                                        <time class="published float-end" datetime="2015-11-01">{{ \Carbon\Carbon::parse($postagem->created_at)->format('d/m/Y h:i:s') }}</time>
                                            </div>
                                            <div class="card-body" style="padding: 5px">
                                            <h4 class="card-title">{{ $postagem->titulo }}</h4>
                                            <p>{{ $postagem->conteudo }}</p>
                                            </div>
                                                <div class="card-footer" style="border-color: #2e2d2d; padding: 5px">
                                                    2 days ago
                                                    <span><a href="{{ url('/blog/curtida/' . $postagem->id) }}" class=" fa fa-thumbs-up float-end fs-2"> {{ $postagem->curtidas->count() }}</a></span>
                                                </div>
                                    </div>

                            </div>
                        </article>
                        <hr class="container">


                        <!-- Comentarios-->
                        @foreach ($postagem->comentarios as $comentario)
                        <article>
                            <div class="center box-container container" style="padding: 0px">

                                <div class="user-container border-end border-dark align-self-stretch" style="padding: 10px">
                                    <img src="{{ url('images/img_avatar.png') }}" class="rounded-circle mb-3 center" style="width: 110px;" alt="Avatar" />
                                    <h5 class="mb-2 center"><strong>{{ $comentario->user->name }}</strong></h5>
                                    <p class="text-muted center"><span class="badge bg-primary">Membro</span></p>
                                </div>

                                <div class="card border-0 cont-container container align-self-stretch" style="margin: 0px; padding: 5px">
                                    <div class="card-header " style="border-color: #2e2d2d; padding: 5px">
                                        <time class="published float-end" datetime="2015-11-01">{{ \Carbon\Carbon::parse($comentario->created_at)->format('d/m/Y h:i:s') }}</time>
                                    </div>
                                    <div class="card-body" style="padding: 5px">
                                    <p>{{ $comentario->conteudo }}</p>
                                    </div>
                                </div>

                            </div>
                        </article>
                        @endforeach

                        <hr class="container">

                        @auth

                        <form class="center" action="{{ route('blog.postagemComentario', $postagem->id) }}" method="post">
                            @csrf
                            <textarea class="cont-container" style="resize: none" name="conteudo" id="conteudo" cols="50" rows="10"></textarea>
                            <button type="submit" class="btn btn-info fa fa-commenting"> Comentar</button>
                        </form>

                        @endauth

@endsection



