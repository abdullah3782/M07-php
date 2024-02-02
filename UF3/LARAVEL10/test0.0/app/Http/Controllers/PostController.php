<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('posts.index', ['prueba' =>'Este es un mensaje de DAW2']);
    }

    public function create() {
        return view('posts.create');
    }


    public function store() {
        return "Aqui se mnostrara alamacenamiento el POST en la BD";
    }

    public function show($post) {

        // return view('POSTS.show',
        // ['post' => $post]);

        return view ('posts.show', compact('post'));
    }

    public function edit($post) {

        return view('posts.edit');


    }
    public function update($post) {

        return "Aqui se actualizará  el POST con id=$post";


    }

    public function destroy($post) {

        return "Aqui se eliminará el POST con id=$post";


    }
}
