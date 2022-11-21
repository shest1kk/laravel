<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller {
    public function index () {
        $output = json_decode(file_get_contents(public_path().'/json/articles.json'), true);
        return view ('layout/layout', ['results' => $output]);
    }
} 
