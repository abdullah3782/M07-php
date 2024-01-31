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

//  Route::get('/', function () {
//      return ('welcome');
//  });

Route::redirect('/');

// Route::get('cursos/create', function () {
//     return ('welcome a al pagina del formulario de CREAR CURSOS');
// });

// Route::get('cursos/{curso}', function ($curso) {
//     return ("Bienvenido a al pagina de: $curso");
// });



// Route::get('cursos', function () {
//     return ('welcome a al pagina de');
// });


//rutas con parametros opcionales
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {

//     if ($categoria != null) {
//         return ("welcome a al pagina de $curso de la categoria $categoria");

//     } else {

//         return ("welcome a al pagina de $curso de la categoria");

//     }
// });

//proteger rutas

// Route::get("cursos/{curso}", function ($curso) {

//     return ("welcome a al pagina de $curso");


// })->where("curso","[A-Za-z]+");
