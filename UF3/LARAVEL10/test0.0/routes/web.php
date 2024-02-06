<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Post2Controller;

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
//  return view('welcome');
//  });

// // cuando el usuario no pone nada ("/") nos redirigira a cursos ("/cursos") || para que esto funcione hay que comentar la linea get que tenga la /
$posts =[
    ['title' => '1r Post'],
    ['title' => '2n Post'],
    ['title' => '3r Post'],
    ['title' => '4r Post'],
];

 Route::view('/', 'options.welcomedaw2') -> name('home');
 Route::view('/contact', 'options.contact') -> name('contact');
 Route::view('/blog', 'options.blog',   ['posts' => $posts])  -> name('blog');

//-----------------Otra Manaera de hacerlo---------------------
// Route::get('/blog', function() {

//     $posts =[
//         ['title' => '1r Post'],
//         ['title' => '2n Post'],
//         ['title' => '3r Post'],
//         ['title' => '4r Post'],
//     ];

//     return view('options.blog', ['posts'=> $posts]);

// })->name('blog');


Route::get('/blog', [Post2Controller::class, 'index']) -> name('blog');





 Route::view('/about', 'options.about') -> name('about');
 Route::view('/listAll', 'options.listAll') -> name('listAll');


// cuando el usuario no pone nada ("/") nos redirigira aqui
// Route::get('/', function () {
//     // return view('welcome');
//     return "Bienvenido a la paguina web";
// });

// cuando el usuario pone cursos ("/cursos") nos redirigira aqui
// Route::get('cursos', function () {
//     return "Bienvenido a cursos";
// });

// cuando el usuario pone cursos ("/cursos/create") nos redirigira aqui
// Route::get('cursos/create', function () {
//     return "Bienvenido a cursos create";
// });

// cuando el usuario pone cursos ("/cursos/{curso}/{categoria}") nos redirigira aqui || si queremos que sea opcional algo le tenemos que poner "?"
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     // si la variable de categoria esta en null pondremos solo el curso
//     if ($categoria != null) {
//         return "Bienvenido al curso: $curso, de la categoria: $categoria";
//     } else {
//         return "Bienvenido al curso: $curso";
//     }
// });

/*
|--------------------------------------------------------------------------
| Protect routes with regular expresions
|--------------------------------------------------------------------------
*/

// Route::get('cursos/{curso}', function ($curso) {
//     return "Bienvenido al curso: $curso";
// })->where('curso', '[A-Za-z]+'); // para poner dos restricciones: ->where(['curso' => '[0-9]+', 'categoria' => '[a-z]+'])



/*
|--------------------------------------------------------------------------
| GET
|--------------------------------------------------------------------------
*/

 Route::get('/posts', [PostController::class, 'index'])   -> name ('posts.index');
 Route::get('/posts/create', [PostController::class, 'create']) -> name ('posts.create');
 Route::get('/posts/{post}', [PostController::class, 'show']) -> name ('posts.show');
 Route::get('/posts/{post}/edit', [PostController::class, 'edit']) -> name ('posts.edit');


//Route::resource('posts', PostController::class) ->only (['index', 'show']);

// Route::resource('posts', PostController::class) ->except (['index', 'show']);

/*
|--------------------------------------------------------------------------
| POST
|--------------------------------------------------------------------------
*/

 Route::post('/post', [PostController::class, 'store']);

/*
|--------------------------------------------------------------------------
| PUT
|--------------------------------------------------------------------------
*/

 Route::put('/posts/{post}', [PostController::class, 'update']);

/*
|--------------------------------------------------------------------------
| DELETE
|--------------------------------------------------------------------------
*/

 Route::delete('/posts/{post}', [PostController::class, 'destroy']);


?>
