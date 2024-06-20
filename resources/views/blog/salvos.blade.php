@extends('layouts.menus')

@section('content')



<div class="text-center" style="color: #0383b9">
    <br>
<h3>Publicações Salvas</h3>
</div>


<div class="vh-100" style="padding: 50px">

    @foreach($favoritos as $value)
    <div class="subforum-row">
        <div class="subforum-icon subforum-column center">
            <i class="fa fa-comments" aria-hidden="true"></i>
        </div>
        <div class="subforum-description subforum-column">
            <h5><a class="link-underline-dark fw-bold" style="color: #0383b9" href="{{ url("blog/postagem/" . $value->postagem_id)}}">{{ $value->postagem->titulo }}</a></h5>
            <p type="text">{{ Str::limit(strip_tags($value->conteudo), 60) }}</p>
        </div>
        <div class="subforum-stats subforum-column center">

        </div>
        <div class="subforum-info subforum-column">
            Criado por: <a href="">{{ $value->user->name }}</a><br>
            em {{ \Carbon\Carbon::parse($value->created_at)->format('d/m/Y h:i:s') }}
        </div>
    </div>
    @endforeach

</div>


@endsection

