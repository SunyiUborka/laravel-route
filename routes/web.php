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
Route::get('/doctor-house', function () {
    return 'Nemcsak az emberek megalázásával lehet a gőzt kiereszteni; mondják,
hogy a bowling jobb még ennél is.';
});

Route::get('/uvegtigris/csoki', function () {
    return 'Mennyire vagy túsz? Sörhöz odaférsz?';
});

Route::get('/uvegtigris/lali', function () {
    return 'Az egybubis az egy kicsit drágább, mert hát abból ki kellett vennem
a többi bubit.';
});

Route::get('/modern-family', function () {
    return 'A siker mindig 1 százalék ihlet, plusz 98 százalék verejték, végül
pedig 2 százalék odafigyelés.';
})->name('modern-family');

Route::get('/harry-potter/fred-es-george', function () {
    return '– Mindig is tudtuk hol a határ - bólintott Fred
- És csak óvatosan léptük át - tette hozzá George.';
})->name('harry-potter.fred-es-george');

Route::get('/harry-potter/hermione', function () {
    return 'Még egy ilyen remek ötlet, és mindhárman meghalunk, vagy akár ki
is csaphatnak!';
})->name('harry-potter.hermione');

Route::get('/naptar/ma', function () {
    return (new DateTime())->format('Y-m-d');
});

Route::get('/naptar/holnap', function () {
    return (new DateTime())->add(new DateInterval("P1D"))
        ->format('Y-m-d');
});

Route::get('/naptar/tegnap', function () {
    return (new DateTime())->sub(new DateInterval("P1D"))
        ->format('Y-m-d');
});

Route::get('/szamologep/{a}+{b}', function ($a, $b) {
    $cal = $a + $b;
    return "{$a} + {$b} = {$cal}";
});

Route::get('/szamologep/{a}-{b}', function ($a, $b) {
    $cal = $a - $b;
    return "{$a} - {$b} = {$cal}";
});

Route::get('/szamologep/{a}*{b}', function ($a, $b) {
    $cal = $a * $b;
    return "{$a} * {$b} = {$cal}";
});

Route::get('/szamologep/{a}/{b}', function ($a, $b) {
    $cal = $a / $b;
    return "{$a} / {$b} = {$cal}";
});

Route::get('nap/{a}', function ($day) {
    return "{$day}";
});

Route::get('/', function () {
    return ;
});