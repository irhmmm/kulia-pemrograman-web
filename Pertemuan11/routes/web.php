<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',  [HomeController::class, 'index']);

Route::get('/saran', function () { 
return view('saran'); 
}); 

Route::get('/menu', function () { 
return view('menu'); 
}); 
