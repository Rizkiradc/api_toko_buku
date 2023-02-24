<?php

namespace App\Http\Controllers;

use App\Models\ProductsM;
use Illuminate\Http\Request;
use App\Http\Resources\ProductsR;


class ProductsC extends Controller
{
    public function index(){
        $posts = ProductsM::all();
        return ProductsR::collection($posts);
    }

    public function detail($id){
        $posts = ProductsM::findOrFail($id);
        return new ProductsR($posts);
    }
}
