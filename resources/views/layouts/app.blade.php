<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compotible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}"></script>
    </head>
    <body>
        <div id="app">
            <div class="container">
                <h2>SPAのテスト</h2>
                <router-view></router-view>

                <h2>ペジネートのテスト</h2>
                <my-table></my-table>
            </div>
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
