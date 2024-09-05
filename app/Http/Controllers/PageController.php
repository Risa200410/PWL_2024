<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang'; 
    }

    public function about() {
        return 'Maritza - 2241760119'; 
    }

    public function articles($id) {
        return 'Artikel Id : ' . $id; 
    }

}
