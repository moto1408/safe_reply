$(document).ready(function()
{
    var site_tour = function(){
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
    };
    $('.site-tour').click(site_tour);
});