<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomentarTanyaController extends Controller
{
    public function create()
    { 
        return view('pertanyaan.komentar.create');
    }
}
