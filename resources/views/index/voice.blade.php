@extends('layouts.layout')
<link href="{{ asset(sprintf('/css/%s/%s.css',controllerName() , actionName()))}}" rel="stylesheet" type="text/css" />
@section('contents')
<div class="container voice">
	<p class="text-center"><img src="{{ asset('/img/voice/lets_play.png') }}" alt="" srcset=""></p>
	<p class="text-center">吹き出しをタップすると再生します</p>
	<div class="voice text-center mt-3">
		<ul>
			<li class="mb-4"><div class="d-flex align-items-center">ねこほしい,ねこほしい,ねこほしい,ねこほしい,ねこほしい,ねこほしい,ねこほしい,ねこほしい,</div></li>
			<li class="mb-4"><div class="d-flex align-items-center">ねこほしい,ねこほしい,ねこほしい,ねこほしい,ねこほしい,ねこほしい,ねこほしい,ねこほしい,</div></li>
			<li class="mb-4"><div class="d-flex align-items-center">ねこほしい,ねこほしい,ねこほしい,ねこほしい,ねこほしい,ねこほしい,ねこほしい,ねこほしい,</div></li>
		</ul>
	</div>
	<p class="text-center"><a href="{{ url('/') }}" class="h5 text-dark border-bottom border-dark">ボイスの組み合わせを変更する</a></p>
</div>
@endsection
