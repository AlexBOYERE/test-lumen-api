<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Models\Book;

$router->get('/', function () use ($router) {
    return "Welcome to the API";
});

$router->get('/phpinfo', function () use ($router) {
    return phpinfo();
});

$router->get('/book/add', function () use ($router) {

    Book::create(['title' => 'Mon premier livre', 'content' => 'Contenu du livre.']);

    // Récupérer tous les livres
    $books = Book::all();

    return response()->json($books);
});

$router->get('/book/get', function () use ($router) {

    // Récupérer tous les livres
    $books = Book::all();

    return response()->json($books);
});

