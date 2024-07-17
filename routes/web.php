<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarAlerta;

Route::get('/', function () {
    return view('welcome');
});

Route::get('alerta-enviada', function () {
    Mail::to('alertadcsar@gmail.com')->send(new EnviarAlerta);
    return "La alerta se envio al correo exitotasamente";
})->name('alerta-enviada');