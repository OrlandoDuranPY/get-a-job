<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculaController extends Controller
{
    public function index(){
        return view('curricula.index');
    }
}
