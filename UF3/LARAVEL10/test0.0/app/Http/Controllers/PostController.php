<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return "Aqui se mostrará el Listado de todos los POSTS";
    }

    public function create() {
        return "Let's create";
    }


    public function store() {
        return "Aqui se mnostrara alamacenamiento el POST en la BD";
    }

    public function show($post) {

        return "Aqui se mostrara  el POST con ID($post)";


    }

    public function edit($post) {

        return "Aqui se mnostrara  el formulario para editar el post $post";


    }
    public function update($post) {

        return "Aqui se actualizará  el POST con id=$post";


    }

    public function destroy($post) {

        return "Aqui se eliminará el POST con id=$post";


    }
}
