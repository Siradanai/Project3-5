<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Types;

class TypesController extends Controller
{
    public function showtypes(){
        return view('admin.types.typesform');
    }

    public function create(Request $request){
        $types = new Types;
        $types->name = $request->name;
        $types->save();
        return redirect('/TypesForm');
    }

    public function addtypes(){
        return view('admin.types.addtypes');
    }

    public function edittypes(){
        return view('admin.types.edittypes');
    }
}
