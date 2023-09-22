<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $persone = [
        [
            "nome" => "michele",
            "cognome" => "bibi",
            "eta" => 22
        ],
        [
            "nome" => "sofia",
            "cognome" => "gigi",
            "eta" => 24
        ],
        [
            "nome" => "giovanni",
            "cognome" => "titi",
            "eta" => 26
        ],
        [
            "nome" => "arianna",
            "cognome" => "vivi",
            "eta" => 29
        ],
    ];
    return view('home', ['persone' => $persone]);
});

Route::get('/photos', function () {
    $photos = [
        [
            "photo" => "https://www.noisecloud.it/wp-content/uploads/2022/05/richard-benson-1.jpg"
        ],
        [
            "photo" => "https://www.napolike.it/wp-content/uploads/2023/05/Gerry-Scotti.jpg"
        ],
        [
            "photo" => "https://i0.wp.com/www.thegiornale.it/wp-content/uploads/2021/05/meme-piu%CC%80-famosi-di-sempre-.jpeg?resize=800%2C445&ssl=1"
        ],
        [
            "photo" => "https://miro.medium.com/v2/resize:fit:1186/1*vMfasJsJ3TahSelTj4BzkA.jpeg"
        ],
    ];
    return view('photos', ['photos' => $photos]);
});

Route::get('/contacts', function () {
    $photo = [

        "photo" => "https://img.freepik.com/free-vector/empty-conference-room_529539-71.jpg?w=2000"


    ];
    return view('contacts',  $photo);
});
