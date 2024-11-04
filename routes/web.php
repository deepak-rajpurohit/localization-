<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::middleware('SetLang')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('about/{lang}',function($lang){
        App::setlocale($lang);
        return view('about');
    });

    Route::get('setlang/{lang}',function($lang){
        Session::put('lang',$lang);
        return redirect('/');
    });
});


