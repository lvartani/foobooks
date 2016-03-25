<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return 'Hello world!';
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
use \Rych\Random\Random;
Route::group(['middleware' => ['web']], function () {
    //

    Route::get('/book/create', 'BookController@getCreate');

    Route::post('/book/create', 'BookController@postCreate');

    Route::get('/book/{title}', function ($title){
            return 'Show an individual book: '.$title;
    });

    Route::get('/practice', function(){
        $random = new Random();
        return $random->getRandomString(8);

    });
});
