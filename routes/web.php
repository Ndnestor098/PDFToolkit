<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\PDFController;
use App\Models\html;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $htmls = html::all();

    return view('home', compact('htmls'));
});

Route::get('/info', function () {
    return view('info');
})->name("info");


Route::post('/FilePDF', PDFController::class);
Route::get('/test', PDFController::class);

Route::post('/excel', [PDFController::class, 'sendJSON']);


Route::get('/gallery', [ImageController::class, "showImages"])->name("images");
Route::post("/upload/images-icons", [ImageController::class, "upload"]);

Route::get("/delete/images", [ImageController::class, "deleteImages"])->name('delete.images');
Route::get("/delete/icons", [ImageController::class, "deleteIcons"])->name('delete.icons');;

