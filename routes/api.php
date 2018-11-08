<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->get('/user/list', function (Request $request) {
    return App\User::paginate();
});

Route::group(['middleware' => 'api'], function() {
    // 記事を投稿する処理
    Route::post('/article/{id}', function($id) {
        // 投稿するユーザーを取得する
        $user = App\User::where('id', $id)->first();

        // リクエストデータを元に記事を作成する
        $article = new App\Article();
        $article->title = request('title');
        $article->content = request('content');

        // ユーザーに関連づけて保存
        $user->articles()->save($article);

        // テストのためtitle, contentのデータをリターン
        return ['title' => request('title'), 'content' => request('content')];
    });
});
