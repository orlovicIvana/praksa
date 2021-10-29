<?php

namespace App\Http\Controllers;

use App\Models\Grupa;
use Illuminate\Http\Request;

class GrupaController extends Controller
{
    public function index(){
        return response()->json(Grupa::get(),200);
    }
    public function show($id){
        return response()->json(Grupa::find($id),200);

    }
    public function store(Request $request ){
        $grupa= Grupa::create($request->all());
        return response()->json($grupa,200);
    }
    public function update(Request $request, Grupa $grupa ){
        $grupa->update($request->all());
        return response()->json($grupa,200);
    }
    public function destroy( Grupa $grupa){
        $grupa->delete();
        return response()->json(null, 204);
    }
}
