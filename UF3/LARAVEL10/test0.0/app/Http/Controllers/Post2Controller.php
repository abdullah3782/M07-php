<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post2Controller extends Controller
{
    //
    public function index()
    {

        $posts = [
            ['title' => '1r Post'],
            ['title' => '2n Post'],
            ['title' => '3r Post'],
            ['title' => '4r Post'],
        ];

        return view('options.blog', ['posts' => $posts]);
    }
}
