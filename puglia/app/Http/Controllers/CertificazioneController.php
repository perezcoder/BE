<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificazione;
use Illuminate\Support\Facades\DB;
 
class CertificazioneController extends Controller
{
    public function index()
    {
        $certificaziones = DB::table('certificaziones')->get();
        return $certificaziones;
        //return Article::all();
    }

    public function show(Certificazione $certificazione)
    {
        return $certificazione;
    }

    public function store(Request $request)
    {
        $certificazione = Certificazione::create($request->all());

        return response()->json($certificazione, 201);
    }

    public function update(Request $request, Certificazione $certificazione)
    {
        $certificazione->update($request->all());

        return response()->json($certificazione, 200);
    }

    public function delete(Certificazione $certificazione)
    {
        $certificazione->delete();

        return response()->json(null, 204);
    }
}
