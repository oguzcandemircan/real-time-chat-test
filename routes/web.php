<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('test-broadcast', function(){
//     broadcast(new \App\Events\ExampleEvent(auth()->user()));
// });

Route::get('get', function() {
    return App\Chat::with('user')->get();
});

Route::post('add', function() {
    $chat = App\Chat::create([
        'text' => request()->text,
        'user_id' => auth()->user()->id,
    ]);
    $chat = App\Chat::where('user_id', $chat->user_id)->where('id', $chat->id)->with('user')->first();
    // $chat = $chat->with('user')->first();
    broadcast(new \App\Events\ExampleEvent($chat));
    return $chat;

});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('new-post', function() {
    return view('post.create');
});

Route::post('post', function() {

    App\Post::create(request()->all());
    return redirect('/home');
});