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
    $data = [
      'nome' => 'Donald',
      'cognome' => 'Duck',
      'vivo' => true,
      'infos' => [
        'autore' => 'Walt Disney',
        'apparizione' => '9 giugno 1934'
      ],
      'extra_infos' => []
    ];
    return view('home', $data);
});
