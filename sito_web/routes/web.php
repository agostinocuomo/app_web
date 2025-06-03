<?php

use App\Http\Controllers\ControllerPrincipale;
use Illuminate\Support\Facades\Route;



/* Route::get( '/', function() {
     return view('homepage');
}); */

Route::post('/upload', [ControllerPrincipale::class, 'fileupload'])->name('file.upload');

Route::get('', [ControllerPrincipale::class, 'homepage'])->name('homepage');

Route::get('/profilo/utente', [ControllerPrincipale::class, 'show'])->name('profilo.utente');
