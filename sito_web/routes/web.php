<?php

use App\Http\Controllers\ControllerPrincipale;
use Illuminate\Support\Facades\Route;



Route::get( '/', function() {
     return view('homepage');
});

Route::post('/upload', [ControllerPrincipale::class, 'fileupload'])->name('file.upload');


