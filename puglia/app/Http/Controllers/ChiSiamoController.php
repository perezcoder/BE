<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChiSiamo;
use Illuminate\Support\Facades\DB;
 
class ChiSiamoController extends Controller
{
    public function index()
    {
        $chisiamos = DB::table('chi_siamos')->get();
        return $chisiamos;
        //return Article::all();
    }

    public function show(ChiSiamo $chisiamo)
    {
        return $chisiamo;
    }

    public function store(Request $request)
    {
        $chisiamo = ChiSiamo::create($request->all());

        return response()->json($chisiamo, 201);
    }

    public function update(Request $request, ChiSiamo $chisiamo)
    {
        $chisiamo->update($request->all());

        return response()->json($chisiamo, 200);
    }

    public function delete(ChiSiamo $chisiamo)
    {
        $chisiamo->delete();

        return response()->json(null, 204);
    }
}
