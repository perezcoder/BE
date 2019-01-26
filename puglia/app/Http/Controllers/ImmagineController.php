<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immagine;
use Illuminate\Support\Facades\DB;
 
class ImmagineController extends Controller
{
    public function index()
    {
        $immagines = DB::table('immagines')->get();
        return $immagines;
        //return Article::all();
    }

    public function show(Immagine $immagine)
    {
        return $immagine;
    }

    public function store(Request $request)
    {
        $immagine = Immagine::create($request->all());

        return response()->json($immagine, 201);
    }

    public function update(Request $request, Immagine $immagine)
    {
        $immagine->update($request->all());

        return response()->json($immagine, 200);
    }

    public function delete(Immagine $immagine)
    {
        $immagine->delete();

        return response()->json(null, 204);
    }
}
