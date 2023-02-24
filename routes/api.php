<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogC;
use App\Http\Controllers\ProductsC;
use App\Http\Controllers\TransactionC;
use App\Http\Controllers\UserC;

route::get('/', function(){
    return 'Hello World API !';
});
route::get('/products',[ProductsC::class,'index'])->middleware(['auth:sanctum']);
route::get('/products/{id}',[ProductsC::class,'detail'])->middleware(['auth:sanctum']);

route::get('/transaction',[TransactionC::class,'index'])->middleware(['auth:sanctum']);
route::get('/transaction/{id}',[TransactionC::class,'detail'])->middleware(['auth:sanctum']);

route::post('/login',[AuthC::class,'login']);

route::get('/admin',function(){
    return Hash::make('admin','kasir','owner');
});

route::get('/kasir',function(){
    return Hash::make('kasir');
});

route::get('/owner',function(){
    return Hash::make('owner');
});

route::get('/log',[LogC::class,'index']);
route::get('/log/{id}',[LogC::class,'detail']);

route::get('/user',[UserC::class,'index']);
route::get('/user/{id}',[UserC::class,'detail']);

route::get('/teller',function(){
    return Hash::make('teller');
});