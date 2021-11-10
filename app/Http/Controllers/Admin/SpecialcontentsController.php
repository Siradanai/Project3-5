<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialcontentsController extends Controller
{
    public function index(){
        return view('admin.specialcontents.specialcontentsform');
    }

    public function addspecialcontents(){
        return view('admin.specialcontents.addspecialcontents');
    }

    public function editspecialcontents(){
        return view('admin.specialcontents.editspecialcontents');
    }
}
