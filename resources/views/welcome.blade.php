@extends('layouts.app')

@section('content')

@foreach ($postagens as $value)
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">{{ $value->titulo }}</a></h2>
										<p>SubTítulo</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">{{ $value->created_at }}</time>
										<a href="#" class="author"><span class="name">{{ $value->user->name }}</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
								<p>{{ $value->conteudo }}</p>
								<footer>
									<ul class="stats">
										<li><a href="#">{{ $value->categoria->nome }}</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
@endforeach

@endsection