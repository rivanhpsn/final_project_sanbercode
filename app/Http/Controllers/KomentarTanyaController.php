<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KomentarPertanyaan;

class KomentarTanyaController extends Controller
{
    public function index()
    {
        $komen = KomentarPertanyaan::all();
        return view("pertanyaan/komentar/index", compact('komen'));
    }
    public function create()
    { 
        return view('pertanyaan.komentar.create');
    }

    public function store(Request $request)
    {

        KomentarPertanyaan::create([
            "isi" => $request["isi"],
            "user_id" => $request["user_id"]
        ]);
        
        return redirect('/pertanyaan');
    }
}
