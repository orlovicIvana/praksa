<?php

namespace App\Http\Controllers;

use App\Models\Praktikant;
use Illuminate\Http\Request;

class PraktikantController extends Controller
{
    public function index(){
        return response()->json(Praktikant::get(),200);
    }
    public function show($id){
        return response()->json(Praktikant::find($id),200);

    }
    public function store(Request $request ){
        $praktikant= Praktikant::create($request->all());
        return response()->json($praktikant,200);
    }
    public function update(Request $request, Praktikant $praktikant ){
        $praktikant->update($request->all());
        return response()->json($praktikant,200);
    }
    public function destroy( Praktikant $praktikant){
        $praktikant->delete();
        return response()->json(null, 204);
    }
}
