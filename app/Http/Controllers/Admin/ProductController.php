<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.productform');
    }

    public function addproduct(){
        return view('admin.product.addproduct');
    }

    public function editproduct(){
        return view('admin.product.editproduct');
    }
}