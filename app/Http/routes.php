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

Route::get("users", function () {
    return App\User::all()->name;
});


Route::get("encuestas", function () {
    $encuesta = new App\Encuesta;
    $encuesta->adress = "Avenida bacan";
    $encuesta->save();
    return App\Encuesta::all();
});



//inicio
Route::get('/', function () {
    return view('welcome');
});


Route::get("/ensayo", function () {
    return view('inicio/menu');
});






//inicios
Route::get('/calculadora/suma', 'CalculadoraController@suma');

Route::get('/opera', 'CalculadoraController@operacion');

Route::get('/calculadora', 'CalculadoraController@princilpal');



Route::get('/formulario/form', 'CalculadoraController@form');
Route::post('/formulario/form', 'CalculadoraController@formPost');

Route::get('/tarea', 'TareaController@GetInicio');
Route::post('/tarea', 'TareaController@PostInicio');

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

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/encuestas/add', function () {
        return view('encuesta/add');
    });

    Route::get("/encuestas/{id}", function ($id) {
        return App\Encuesta::findOrFail($id);
    });

       
    Route::post('/encuestas/addsave', 'EncuestaController@GetGuardar');

    Route::get('/sugerencias', function () {
        return view('opiniones/sugerencia');
    });

    Route::get('/encuestas', 'EncuestaController@Index');
   
});


Route::get('/usuarios', function () {

    $users = App\User::all();
    return view('usuarios', ["users" => $users]);
});


