@extends('layouts.layout')
<link href="{{ asset(sprintf('/css/%s/%s.css',controllerName() , actionName()))}}" rel="stylesheet" type="text/css" />
@section('contents')
<div class="container position-relative">
	<div class="container main-mask position-absolute top-0 start-0">
		<p class="main-title"><img src="{{ asset('/img/main/title_logo.png') }}" alt="" srcset="" class="w-100"></p>
		<div class="main-message">
			<p>家でひとりの時</p>
			<p>「自分の声で対応したくない･･･」</p>
			<p>そんな時ありますよね？</p>
		</div>
		<div class="main-message mb-5">
			<p>声・場面・トーンを組み合わせ</p>
			<p>撃退ボイスをカスタマイズ</p>
			<p>しましょう！</p>
		</div>
	</div>

	<div class="container">
		<div class="main">
			<!-- タップ画像の背景を表示するダミーエリア -->
		</div>
	</div>
</div>
<div class="container how-to-use step-1 pb-2">
	<p class="text-center pt-4 title"><img src="{{ asset('/img/main/how_to_use.png') }}" alt="" srcset=""></p>
	<p class="text-center h5">使い方</p>
	<p class="text-center mt-3 step-text mx-2"><span>step1</span>声のタイプを選びましょう</p>
	<ul class="row mx-1 mb-5">
		<li class="col-6"><img src="{{ asset('/img/main/step1_01.png') }}" alt="" srcset="" class="w-100"></li>
		<li class="col-6"><img src="{{ asset('/img/main/step1_02.png') }}" alt="" srcset="" class="w-100"></li>
	</ul>
</div>
<div class="container how-to-use step-2 pb-2">
	<p class="text-center pt-3 step-text mx-2"><span>step2</span>対応事例を選びましょう</p>
	<ul class="row mx-1 mb-4">
		<li class="col-6"><img src="{{ asset('/img/main/step2_01.png') }}" alt="" srcset="" class="w-100"></li>
		<li class="col-6"><img src="{{ asset('/img/main/step2_02.png') }}" alt="" srcset="" class="w-100"></li>
	</ul>
	<ul class="row mx-1 mb-5">
		<li class="col-6"><img src="{{ asset('/img/main/step2_03.png') }}" alt="" srcset="" class="w-100"></li>
	</ul>
</div>
<div class="container how-to-use step-3 pb-2">
	<p class="text-center pt-3 step-text mx-2"><span>step3</span>音声のトーン・口調を選びましょう</p>
	<ul class="row mx-1 mb-4">
		<li class="col-6"><img src="{{ asset('/img/main/step3_01.png') }}" alt="" srcset="" class="w-100"></li>
		<li class="col-6"><img src="{{ asset('/img/main/step3_02.png') }}" alt="" srcset="" class="w-100"></li>
	</ul>
	<ul class="row mx-1 mb-5">
		<li class="col-6"><img src="{{ asset('/img/main/step3_03.png') }}" alt="" srcset="" class="w-100"></li>
	</ul>
	<p class="mx-4"><img src="{{ asset('/img/main/submit.png') }}" alt="" srcset="" class="w-100"></p>
</div>
@endsection
