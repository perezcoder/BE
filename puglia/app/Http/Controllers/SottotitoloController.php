<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sottotitolo;
use Illuminate\Support\Facades\DB;
 
class SottotitoloController extends Controller
{
    public function index()
    {
        $sottotitolos = DB::table('sottotitolos')->get();
        return $sottotitolos;
        //return Article::all();
    }

    public function show(Categoria $sottotitolo)
    {
        return $sottotitolo;
    }

    public function store(Request $request)
    {
        $sottotitolo = Sottotitolo::create($request->all());

        return response()->json($sottotitolo, 201);
    }

    public function update(Request $request, Sottotitolo $sottotitolo)
    {
        $sottotitolo->update($request->all());

        return response()->json($sottotitolo, 200);
    }

    public function delete(Sottotitolo $sottotitolo)
    {
        $sottotitolo->delete();

        return response()->json(null, 204);
    }
}
