<!doctype html>
<html lang="jp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{-- 定数を代入するようにする --}}">
<meta name="author" content="{{-- 定数を代入するようにする --}}">
<meta name="generator" content="">
<title>サンプルイメージ{{-- 定数を代入するようにする --}}</title>


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
</head>
<body class="m-auto" style="width:400px">
{{-- 共通ヘッダー --}}
@include('layouts.parts.header')

{{-- 可変コンテンツ --}}
<main>
@yield('contents')
</main>

{{-- 共通フッター --}}
@include('layouts.parts.footer')
</body>
</html>
