<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    // return view('welcome');
    // using raw sql
    // $users = DB::select('select * from users ');
    // dd($users);

    //  quiery builder
    $users = DB::table('users')->select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
    // ('select * from users ');
    dd($users);
});
