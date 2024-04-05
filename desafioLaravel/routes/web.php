<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produtoController;

/*Route::get('/', function () {
    return view('produtos.index');
});*/

Route::resource("/produtos", produtoController::class);
