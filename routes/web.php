<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarAlerta;

Route::get('/', function () {
    return view('welcome');
});

Route::get('alerta-enviada', function () {
    Mail::to('rlaramora3@gmail.com')
    // ->cc('rlaramora3@gmail.com')  para enviar una copia a otro correo // 
    ->send (new EnviarAlerta);
    return "La alerta se envio al correo exitotasamente";
})
    ->name('alerta-enviada');