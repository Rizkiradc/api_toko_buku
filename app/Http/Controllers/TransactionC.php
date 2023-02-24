<?php

namespace App\Http\Controllers;

use App\Models\TransactionM;
use Illuminate\Http\Request;
use App\Http\Resources\TransactionR;


class TransactionC extends Controller
{
    public function index(){
        $posts = TransactionM::all();
        return TransactionR::collection($posts);
    }

    public function detail($id){
        $posts = TransactionM::findOrFail($id);
        return new TransactionR($posts);
    }
}
