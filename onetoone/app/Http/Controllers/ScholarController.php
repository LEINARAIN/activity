<?php

namespace App\Http\Controllers;

use App\Models\Scholar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller; //notsure kung need ng import studentcontroller dito

class ScholarController extends Controller
{
    public function index () {
        $scholars = Scholar::with('educational', 'country')->get();
        return response()->json(['scholars' => $scholars]);
    }

    public function store (Request $request) {
        $scholar = Scholar::create($request->all());
        $scholar -> educational()->create($request->input('educational'));
        $scholar -> country()->create($request->input('country'));
        return response()->json($scholar, 201);   
    }

    public function update (Request $request, $id) {
        $scholar = Scholar::find($id);
        $scholar -> update($request->all());
        $scholar -> educational()->update($request->input('educational'));
        $scholar -> country()->update($request->input('country'));
        return response()->json(['scholar'=> $scholar]);
    }

    public function destroy ($id) {
        $scholar = Scholar::find($id);
        $scholar -> educational()-> delete();
        $scholar -> country()-> delete();
        $scholar -> delete();
        return response()->json(['message'=> "na-delete mo na!!"]);
    }
}
