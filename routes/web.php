<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsDetailsController;

Route::get('/', function () {
    return view('accueil');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/DemanderDevis', function () {
    return view('Devis');
});




Route::get('/404', function () {
    return view('404');
});
Route::get('/DetailsService', function () {
    return view('ServiceDetails');
});
Route::get('/DetailsMateriel', function () {
    return view('MaterielDetails');
});
Route::get('/DetailsApplication', function () {
    return view('ApplicationDetails');
});
Route::get('/apropos', [AboutController::class, 'index']);

Route::get('/actualites', [NewsController::class, 'index']);

Route::get('/actualitesDetails', function () {
    return view('newsDetails');
});

Route::get('/actualitesDetails/{id}', [NewsDetailsController::class, 'index']);
