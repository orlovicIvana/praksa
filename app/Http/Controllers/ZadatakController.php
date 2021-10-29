<?php

namespace App\Http\Controllers;

use App\Models\Zadatak;
use Illuminate\Http\Request;

class ZadatakController extends Controller
{
    public function index(){
        return response()->json(Zadatak::get(),200);
    }
    public function show($id){
        return response()->json(Zadatak::find($id),200);

    }
    public function store(Request $request ){
        $zadatak= Zadatak::create($request->all());
        return response()->json($zadatak,200);
    }
    public function update(Request $request, Zadatak $zadatak ){
        $zadatak->update($request->all());
        return response()->json($zadatak,200);
    }
    public function destroy( Zadatak $zadatak){
        $zadatak->delete();
        return response()->json(null, 204);
    }
}
