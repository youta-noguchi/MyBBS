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

Route::get('/', 'MessagesController@index');

// Route::resource('messages', 'MessagesController');

// CRUD
// index: showの補助ページ
Route::get('messages', 'MessagesController@index')->name('messages.index');
// create: 新規作成用のフォームページ
// Route::get('messages/create', 'MessagesController@create')->name('messages.create');
// // メッセージの個別詳細ページ表示
// Route::get('messages/{message}', 'MessagesController@show')->name('messages.show');
// edit: 更新用のフォームページ
Route::get('messages/{message}/edit', 'MessagesController@edit')->name('messages.edit');
// メッセージの更新処理（編集画面を表示するためのものではありません）
Route::put('messages/{message}', 'MessagesController@update')->name('messages.update');
// メッセージを削除
Route::delete('messages/{message}', 'MessagesController@destroy')->name('messages.destroy');
// メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
Route::post('messages', 'MessagesController@store')->name('messages.store');