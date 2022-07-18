window.onload = function()
{
    // ハンバーガーメニューの「三」ボタンオブジェクト
    var burger_button = document.querySelector('header li.burger');
    burger_button.addEventListener('click',function()
    {
        // ハンバーガーメニューを表示する
        document.querySelector('.burger-menu').classList.remove('d-none');
    });

    // ハンバーガーメニューの「戻る」ボタンオブジェクト
    var burger_back_button = document.querySelector('.burger-menu .burger');
    burger_back_button.addEventListener('click',function()
    {
        // ハンバーガーメニューを非表示
        document.querySelector('.burger-menu').classList.add('d-none');
    });
}