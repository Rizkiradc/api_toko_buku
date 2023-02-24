<?php

namespace App\Http\Controllers;

use App\Models\UserM;
use Illuminate\Http\Request;
use App\Http\Resources\UserR;


class UserC extends Controller
{
    public function index(){
        $posts = UserM::all();
        return UserR::collection($posts);
    }

    public function detail($id){
        $posts = UserM::findOrFail($id);
        return new UserR($posts);
    }
}
