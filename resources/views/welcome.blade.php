<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Lieferservice Aschaffenburg</title>
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body itemscope>
<main>
    <div class="preloader">
        <div id="cooking">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div id="area">
                <div id="sides">
                    <div id="pan"></div>
                    <div id="handle"></div>
                </div>
                <div id="pancake">
                    <div id="pastry"></div>
                </div>
            </div>
        </div>
    </div>
    <header class="stick">
        <div class="topbar">
            <div class="container">
                <div class="select-wrp">
                    <select data-placeholder="Ich hätte Hunger auf...">
                        <option>Ich hätte Hunger auf...</option>
                        <option>Deutsch</option>
                        <option>Italienisch</option>
                        <option>Chinesisch</option>
                        <option>Gemischt</option>
                    </select>
                </div>
            </div>
        </div>
    </header>
</main>
<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
