<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaMainController extends Controller
{
    public function mainpage(){
        return view('mainpage');
    }
}
