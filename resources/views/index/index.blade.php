@extends('layouts.layout')

@section('contents')
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- リリースするとき下記は消す！！ -->
<meta name="robots" content="noindex">
<!-- <scrpt src="vice/library/jquery-3.6.0.min.js"></scrpt> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<!-- anno.js -->
<script src="./library/anno/anno.js" type="text/javascript"></script>
<script src="./library/anno/jquery.scrollintoview.js" type="text/javascript"></script>
<link href="./library/anno/anno.css" rel="stylesheet" type="text/css" />

<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>

<script>
$(function () {
    $('.site-tour').click(function () {
        var anno1 = new Anno([
            {
                target: '.site-tour',
                position: 'center-bottom',
                content: '（1/5）<br>家でひとりの時<br><strong>「自分の声で対応したくない…」</strong>時ありますよね？',
                buttons: [AnnoButton.NextButton]//ボタンの設定
            },
            {
                target: '.voice_btn_area',
                position: 'center-bottom',
                content: '（2/5）<br>そんな時に、このボタンを押して撃退してください！！',
                buttons: [AnnoButton.NextButton]//ボタンの設定
            },
            {
                target: '.category-type-area',
                position: 'center-bottom',
                content: '（3/5）<br>対応事例はこちらを選択してください。',
                buttons: [AnnoButton.NextButton]//ボタンの設定
            },
            {
                target: '.voice-type-area',
                position: 'center-bottom',
                content: '（4/5）<br>音声のトーンや、口調はこちらで調整が可能です。',
                buttons: [AnnoButton.NextButton]//ボタンの設定
            },
            {
                target: '.voice_btn_area',
                position: 'center-bottom',
                content: '（5/5）<br>次に上から順番にボタンを押して<br>迷惑な人たちを撃退してください！',
                buttons: [AnnoButton.EndButton, ]
            }
        ])
        anno1.show();
    });
});
    $(document).ready(function()
    {
    	
        var music_dir = './musics/';
        var bgm = new Audio();
        
        const template_btn = 
        `<div class="row mt-2">
            <div class="col-12"><button type="button" class="btn voice_btn" data-src="soft_03.mp3">失礼しまーす。</button></div>
        </div>`;
        let btn_data = [];
        // BGM 再設定
        function music_set(music_src)
        {
            bgm.preload = 'auto';
            bgm.src = music_src;
            bgm.load();
        }
        
        // BGM を再生する
        var voice_btn_event = function(){
            let music_src = $(this).data('src');
            music_set(music_dir + music_src);
            bgm.play();
        }; 

		// カテゴリボタンを押したイベント
		var category_btn_event = function()
		{
			// カテゴリータイプを取得する
			let category_type = $(this).data('type');
			// 全タイプ隠す
			$('.delivery, .tel, .sales').hide();
			// クリックしたタイプを表示する
			$('.' + category_type ).show();
			
			// Voice Typeの一番上のボタンをクリックする
			$('.voice-type-area button.'+ category_type).each(function(){
				$(this).trigger('click');
				return false;
			});
		};
		
		// 読み込み時
		var page_load_event = function(){
			// category type:の一番初めの選択肢をクリックする
			$('.category-type-area label:first-child input[type=radio]').trigger('click');
			// voice type:の一番初めの選択肢をクリックする
        	$('.voice-type-area button:first-child').trigger('click');
		};
		
        // ボイス再生ボタンクリックイベント
        $(document).on('click', '.voice_btn', voice_btn_event);
        
        // カテゴリータイプボタンクリックイベント
        $('.category_type_btn').on('change', category_btn_event);
        
        $('.voice_type_btn').on('click', function(){
            let music_type = $(this).data('type');
            let default_class = $(this).attr('class');

            // 音声再生ボタンの再設定（）
            $('.voice_btn_area button').each( function(index)
            {
                // 音声タイプに併せて
                switch(music_type)
                {
                    case '00':
	                    btn_data = 
	                    [
	                        {
	                            class  : default_class,
	                            number : '01',
	                            src    : music_type + '_01.mp3',
	                            text   : 'はい'
	                        },
	                        {
	                            class  : default_class,
	                            number : '02',
	                            src    : music_type + '_02.mp3',
	                            text   : 'あの、間に合っているのでいらないです。'
	                        },
	                        {
	                            class  : default_class,
	                            number : '02',
	                            src    : music_type + '_03.mp3',
	                            text   : '失礼します。'
	                        }
	                    ];
	                    break;
	                    
					case '01':
						btn_data = 
						[
							{
							    class  : default_class,
							    number : '01',
							    src    : music_type + '_01.mp3',
							    text   : 'はい'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_02.mp3',
							    text   : 'あの、迷惑なんでもう電話してこないでください。'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_03.mp3',
							    text   : '失礼します。'
							}
						];
						break;
						
					case '02':
						btn_data = 
						[
							{
							    class  : default_class,
							    number : '01',
							    src    : music_type + '_01.mp3',
							    text   : 'おい！'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_02.mp3',
							    text   : 'なんなんだよ！テメェは！'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_03.mp3',
							    text   : '迷惑なんだよ！'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_04.mp3',
							    text   : '二度と掛けてくんな！！'
							}
						];
						break;
						
					case '03':
						btn_data = 
						[
							{
							    class  : default_class,
							    number : '01',
							    src    : music_type + '_01.mp3',
							    text   : 'はい'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_02.mp3',
							    text   : 'あの、結構です。'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_03.mp3',
							    text   : '失礼します。'
							}
						];
						break;
						
					case '04':
						btn_data = 
						[
							{
							    class  : default_class,
							    number : '01',
							    src    : music_type + '_01.mp3',
							    text   : 'はい'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_02.mp3',
							    text   : 'あの、迷惑なんで帰ってください。'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_03.mp3',
							    text   : '失礼します。'
							}
						];
						break;
						
					case '05':
						btn_data = 
						[
							{
							    class  : default_class,
							    number : '01',
							    src    : music_type + '_01.mp3',
							    text   : 'はい'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_02.mp3',
							    text   : 'あの、迷惑なんで帰ってください。'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_03.mp3',
							    text   : 'これ以上来たら、警察に通報します。'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_04.mp3',
							    text   : '失礼します。'
							}
						];
						break;
						
					case '06':
						btn_data = 
						[
							{
							    class  : default_class,
							    number : '01',
							    src    : music_type + '_01.mp3',
							    text   : 'ああ！？'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_02.mp3',
							    text   : 'なんなんだよ、いきなり鳴らしやがっておら！'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_03.mp3',
							    text   : 'ざけんじゃねえよ二度と来るなよ！'
							}
						];
						break;
					
					case '07':
						btn_data = 
						[
							{
							    class  : default_class,
							    number : '01',
							    src    : music_type + '_01.mp3',
							    text   : 'あのー、'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_02.mp3',
							    text   : 'おたくなんなんですか？'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_03.mp3',
							    text   : 'いや必要ないんで帰ってください。'
							}
							,
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_04.mp3',
							    text   : '失礼します。'
							}
						];
						break;
						
					case '08':
						btn_data = 
						[
							{
							    class  : default_class,
							    number : '01',
							    src    : music_type + '_01.mp3',
							    text   : 'おい！'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_02.mp3',
							    text   : 'おいなんなん？'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_03.mp3',
							    text   : 'お前なんなん？'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_04.mp3',
							    text   : '迷惑なんだよ！'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_05.mp3',
							    text   : '帰れ！'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_06.mp3',
							    text   : '二度と来るな！'
							}
						];
						break;
						
					case '09':
						btn_data = 
						[
							{
							    class  : default_class,
							    number : '01',
							    src    : music_type + '_01.mp3',
							    text   : 'すみません'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_02.mp3',
							    text   : 'いま、家主がいないので、また今度にしてください。'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_03.mp3',
							    text   : '失礼しまーす。'
							}
						];
						break;
						
					case '10':
					case 10:
						btn_data = 
						[
							{
							    class  : default_class,
							    number : '01',
							    src    : music_type + '_01.mp3',
							    text   : 'はい'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_02.mp3',
							    text   : '玄関の前に置いておいてください。。'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_03.mp3',
							    text   : 'はい。'
							},
							{
							    class  : default_class,
							    number : '02',
							    src    : music_type + '_04.mp3',
							    text   : 'はーい。'
							}
						];
						break;
                }
                
                // 初期化する
                $('.voice_btn_area').empty();
                
                let temporary = template_btn;
                for(let i = 0; i < btn_data.length; i++)
                {
                    temporary = $(template_btn).clone();
                    temporary.find('button').text(btn_data[i].text);
                    temporary.find('button').addClass(btn_data[i].class);
                    temporary.find('button').data('src', btn_data[i].src);
                    
                    $('.voice_btn_area').append(temporary);
                }
            });
        });
        
        // 画面ロード初期イベント
        page_load_event();
    });
    
</script>
</head>
    <body>
        <div class="container">
            <p class="h2 text-center">Safe Reply（セーフリプライ）</p>
            <p class="h5 text-center">～迷惑電話、迷惑訪問撃退ボイス～</p>
            <hr>
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
        
    </body>
</html>
@endsection
