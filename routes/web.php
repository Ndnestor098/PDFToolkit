<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/info', function () {
    return view('info');
})->name("info");

Route::post('/FilePDF', PDFController::class);

Route::get('/gallery/image', [PDFController::class, "showImages"])->name("images");
Route::post("/upload/images-icons", [PDFController::class, "upload"]);

Route::get('/pdf', PDFController::class);
