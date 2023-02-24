<?php

namespace App\Http\Controllers;

use App\Models\LogM;
use Illuminate\Http\Request;
use App\Http\Resources\LogR;


class LogC extends Controller
{
    public function index(){
        $posts = LogM::all();
        return LogR::collection($posts);
    }

    public function detail($id){
        $posts = LogM::findOrFail($id);
        return new LogR($posts);
    }
}
