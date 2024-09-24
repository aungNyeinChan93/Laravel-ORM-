<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("user",function(){
    $user =User::with("roles")->get();
    dd($user->toArray());
});

Route::get("role",function(){
    $admin= Role::with("users")->get();
    // dd($admin->users->first()->name);
    dd($admin->toArray());
});


