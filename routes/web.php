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
  $comics = config('comics');
  $merch = config('merch');

  return view('homepage', compact('comics', 'merch'));
})->name('homepage');

Route::get('comicPage/{id}', function($id) {
  $comics = config('comics');
  if ($id < count($comics) && is_numeric($id) && $id>=0) {
    $comic = $comics[$id];
    return view('comic_page/comicPage', compact('comic'));
  } else {
    abort('404');
  };
})->name('comicPage');
