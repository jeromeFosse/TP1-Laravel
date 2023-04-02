<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('index');
});

Route::get('etudiant', [EtudiantController::class, 'index'])->name('etudiant.index');

// Affiche formulaire ajout
Route::get('etudiant-ajout', [EtudiantController::class, 'create'])->name('etudiant.create'); 

// Ajout 
Route::post('etudiant-ajout', [EtudiantController::class, 'store']); 

// Voir un étudiant
Route::get('etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show'); 

// Affiche la page modification
Route::get('etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit'); 
// Modification
Route::put('etudiant-edit/{etudiant}', [EtudiantController::class, 'update']);

// Suppression
Route::delete('etudiant/{etudiant}', [EtudiantController::class, 'destroy']); 