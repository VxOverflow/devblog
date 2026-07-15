<?php
use App\Http\Controllers\EntrepriseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EntrepriseController::class, 'index'])-> name('accueil');
Route::get('/services', [EntrepriseController::class, 'services'])-> name('services');
Route::get('/contacts', [EntrepriseController::class, 'contacts'])-> name('contact');
Route::get('/personnel', [EntrepriseController::class, 'personnel'])-> name('personnel');
