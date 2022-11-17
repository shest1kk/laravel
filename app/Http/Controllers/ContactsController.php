<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller {
    public function index () {
        $result = json_decode(file_get_contents(public_path().'/contacts.json'), true);
        return view ('layouts/contacts', ['contacts' => $result]);
    }
} 
