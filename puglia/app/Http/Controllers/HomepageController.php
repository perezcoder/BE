<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;
use Illuminate\Support\Facades\DB;
 
class HomepageController extends Controller
{
    public function index()
    {
        $homepages = DB::table('homepages')->get();
        return $homepages;
        //return Article::all();
    }

    public function show(Homepage $homepage)
    {
        return $homepage;
    }

    public function store(Request $request)
    {
        $homepage = Homepage::create($request->all());

        return response()->json($homepage, 201);
    }

    public function update(Request $request, Homepage $homepage)
    {
        $homepage->update($request->all());

        return response()->json($homepage, 200);
    }

    public function delete(Homepage $homepage)
    {
        $homepage->delete();

        return response()->json(null, 204);
    }
}
