@extends('layouts.layout')
<link href="{{ asset(sprintf('/css/%s/%s.css',controllerName() , actionName()))}}" rel="stylesheet" type="text/css" />
@section('contents')
<!-- サイトツアー -->
<script src="./js/anno/voice.js" type="text/javascript"></script>
<!-- メイン処理JS -->
<script src="./js/voice/main.js" type="text/javascript"></script>

<div class="container">
	<p class="h6 site-tour"><i class="fas fa-question-circle"></i>&nbsp;how to user?&nbsp;<small>(click here)</small></p>
	<hr>
	<div class="row category-type-area p-1">
		<div class="col-12 d-flex align-items-center h5">category Type:</div>
		<div class="col-12 btn-group btn-group-toggle " data-toggle="buttons">
			<label class="btn btn-success">
				<input type="radio" name="category" class="category_type_btn" data-type="tel">対迷惑電話
			</label>
			<label class="btn btn-primary">
				<input type="radio" name="category" class="category_type_btn" data-type="sales">迷惑訪問
			</label>
			<label class="btn btn-danger">
				<input type="radio" name="category" class="category_type_btn" data-type="delivery">置き配
			</label>
		</div>
	</div>
	<div class="row voice-type-area p-1">
		<div class="col-12 d-flex align-items-center h5">Voice Type:</div>
		<div class="col-12 btn-group btn-group-toggle " data-toggle="buttons">
			<div class="">
				<button class="mt-1 voice_type_btn btn btn-success tel sales" data-type="00">対迷惑電話＆迷惑訪問【優しめVer.】</button>
				<button class="mt-1 voice_type_btn btn btn-primary tel" data-type="01">対迷惑電話【冷静Ver.】</button>
				<button class="mt-1 voice_type_btn btn btn-danger tel" data-type="02">対迷惑電話【激怒Ver.】</button>
				<button class="mt-1 voice_type_btn btn btn-primary sales" data-type="03">対迷惑訪問【冷静Ver.】</button>
				<button class="mt-1 voice_type_btn btn btn-primary sales" data-type="05">対迷惑訪問【冷静・通報Ver.】</button>
				<button class="mt-1 voice_type_btn btn btn-danger sales" data-type="06">対迷惑訪問【激怒Ver.】</button>
				<button class="mt-1 voice_type_btn btn btn-primary sales" data-type="07">対迷惑訪問【割込冷静彼氏Ver.】</button>
				<button class="mt-1 voice_type_btn btn btn-danger sales" data-type="08">対迷惑訪問【割込激怒彼氏Ver.】</button>
				<button class="mt-1 voice_type_btn btn btn-success delivery" data-type="09">対訪問【家主居ませんVer.】</button>
				<button class="mt-1 voice_type_btn btn btn-success delivery" data-type="10">置き配</button>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-12 align-items-center h5">Voice：</div>
	</div>
	<div class="voice_btn_area p-1">
		<div class="row mt-2 col-12 ">
			<div class="col-12"><button type="button" class="btn btn-primary voice_btn" data-type-number="01" data-src="soft_01.mp3">はい。</button></div>
		</div>
		<div class="row mt-2 col-12 ">
			<div class="col-12"><button type="button" class="btn btn-primary voice_btn" data-type-number="02" data-src="soft_02.mp3">間に合っているので大丈夫です。</button></div>
		</div>
		<div class="row mt-2 col-12 ">
			<div class="col-12"><button type="button" class="btn btn-primary voice_btn" data-type-number="03" data-src="soft_03.mp3">失礼しまーす。</button></div>
		</div>
	</div>
</div>
@endsection
