<?php

use Illuminate\Http\Request;
Use App\Article;

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

//Route::group(['middleware' => 'auth:api'], function() {

    //ROUTE ARTICOLI
    Route::get('articles', 'ArticleController@index');
    Route::get('articles/{article}', 'ArticleController@show');
    Route::post('articles', 'ArticleController@store');
    Route::put('articles/{article}', 'ArticleController@update');
    Route::delete('articles/{article}', 'ArticleController@delete');

    //ROUTE CATEGORIE
    Route::get('categorias', 'CategoriaController@index');
    Route::get('categorias/{categoria}', 'CategoriaController@show');
    Route::post('categorias', 'CategoriaController@store');
    Route::put('categorias/{categoria}', 'CategoriaController@update');
    Route::delete('categorias/{categoria}', 'CategoriaController@delete');

    //ROUTE IMMAGINE
    Route::get('immagines', 'ImmagineController@index');
    Route::get('immagines/{immagine}', 'ImmagineController@show');
    Route::post('immagines', 'ImmagineController@store');
    Route::put('immagines/{immagine}', 'ImmagineController@update');
    Route::delete('immagines/{immagine}', 'ImmagineController@delete');

    //ROUTE SERVIZIO
    Route::get('servizios', 'ServizioController@index');
    Route::get('servizios/{servizio}', 'ServizioController@show');
    Route::post('servizios', 'ServizioController@store');
    Route::put('servizios/{servizio}', 'ServizioController@update');
    Route::delete('servizios/{servizio}', 'ServizioController@delete');

    //ROUTE CERTIFICAZIONE
    Route::get('certificaziones', 'CertificazioneController@index');
    Route::get('certificaziones/{certificazione}', 'CertificazioneController@show');
    Route::post('certificaziones', 'CertificazioneController@store');
    Route::put('certificaziones/{certificazione}', 'CertificazioneController@update');
    Route::delete('certificaziones/{certificazione}', 'CertificazioneController@delete');

    //ROUTE HOMEPAGE
    Route::get('homepages', 'HomepageController@index');
    Route::get('homepages/{homepage}', 'HomepageController@show');
    Route::post('homepages', 'HomepageController@store');
    Route::put('homepages/{homepage}', 'HomepageController@update');
    Route::delete('homepages/{homepage}', 'HomepageController@delete');


//});

/*
Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');
*/
Route::post('register', 'Auth\RegisterController@register');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
