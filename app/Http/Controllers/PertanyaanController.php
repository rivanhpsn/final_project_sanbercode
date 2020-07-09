<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Tag;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = Pertanyaan::all();
        // dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_pert = Pertanyaan::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
        ]);

        $tagArr = explode(',', $request->tags);
        $tagsMulti  = [];
        foreach($tagArr as $strTag){
            $tagArrAssc["nama"] = $strTag;
            $tagsMulti[] = $tagArrAssc;
        }
        // dd($tagsMulti);
        // Create Tags baru
        foreach($tagsMulti as $tagCheck){
            $tag = Tag::firstOrCreate($tagCheck);
            $new_pert->tags()->attach($tag->id);
        }
        
        return redirect('/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        // dd($pertanyaan->tags);
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Pertanyaan::where('id',$id)
            ->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
            ]);

        return redirect('/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = Pertanyaan::destroy($id);

        return redirect('/pertanyaan');
    }
}
