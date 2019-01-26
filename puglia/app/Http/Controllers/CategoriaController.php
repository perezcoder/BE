<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Illuminate\Support\Facades\DB;
 
class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = DB::table('categorias')->get();
        return $categorias;
        //return Article::all();
    }

    public function show(Categoria $categoria)
    {
        return $categoria;
    }

    public function store(Request $request)
    {
        $categoria = Categoria::create($request->all());

        return response()->json($categoria, 201);
    }

    public function update(Request $request, Categoria $categoria)
    {
        $categoria->update($request->all());

        return response()->json($categoria, 200);
    }

    public function delete(Categoria $categoria)
    {
        $categoria->delete();

        return response()->json(null, 204);
    }
}
