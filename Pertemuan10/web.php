<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
return view('index'); 
}); 
Route::get('/saran', function () { 
return view('saran'); 
}); 
Route::get('/menu', function () { 
return view('menu'); 
}); 
