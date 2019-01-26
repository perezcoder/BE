<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servizio;
use Illuminate\Support\Facades\DB;
 
class ServizioController extends Controller
{
    public function index()
    {
        $servizios = DB::table('servizios')->get();
        return $servizios;
        //return Article::all();
    }

    public function show(Servizio $servizio)
    {
        return $servizio;
    }

    public function store(Request $request)
    {
        $servizio = Servizio::create($request->all());

        return response()->json($servizio, 201);
    }

    public function update(Request $request, Servizio $servizio)
    {
        $servizio->update($request->all());

        return response()->json($servizio, 200);
    }

    public function delete(Servizio $servizio)
    {
        $servizio->delete();

        return response()->json(null, 204);
    }
}
