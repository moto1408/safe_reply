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