<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/route/hello', function () {
    return '<h>hello</h>';
});
Route::get('/view/word/{num}/{num2}', function ($num,$num2) {
    return view('message.word',
    [
        'num' => $num,
        'num2' =>$num2,
    ]);
});

Route::get('/controller/hello',[App\Http\Controllers\CalcController::class, 'hello']);
Route::get('/controller/calcs/{num}/{colc}/{num2}', [App\Http\Controllers\CalcController::class, 'calcs']);
