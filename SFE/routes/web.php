<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Actualite;
use App\Models\Competence;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    $actualites = Actualite::all();
    $competences =Competence::all();
    return view('welcome',compact('actualites','competences'));
})->name('home1');


//View routes:
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/admin/home', function () { return view('admin.page-principale'); })->name('home-admin');
Route::get('/admin/barre', function () { return view('admin.barre'); })->name('barre-admin');
Route::get('/admin/ajoutserv', function () { return view('admin.ajoute-service'); })->name('ajouteserv-admin');
Route::get('login', function () { return view('login'); })->name('login');

Auth::routes();
//Competence Routes :
Route::post('/ajouter-comptence', [App\Http\Controllers\CompetenceController::class, 'ajouterComptence'])->name('comptence.ajouter');
Route::get('/view-ajouter-comptence', [App\Http\Controllers\CompetenceController::class, 'vue'])->name('view-comptence.ajouter');
//Route::get('/affcomp', [App\Http\Controllers\CompetenceController::class, 'afficherCompetences'])->name('competences.index');

//Acctualite Routes : 
Route::post('/ajouter-actualite', [App\Http\Controllers\ActualiteController::class, 'ajouterActualite'])->name('Actualite.ajouter');
Route::get('/admin/ajoutact', function () { return view('admin.ajoute-actualite'); })->name('ajouteact-admin');
//Route::get('/', [App\Http\Controllers\ActualiteController::class, 'index1'])->name('actualites.index');
Route::get('/admin/actualite', [App\Http\Controllers\ActualiteController::class, 'show_actualite'])->name('show-actualite-admin');
Route::delete('/actualites/{id}', [App\Http\Controllers\ActualiteController::class, 'destroy'])->name('actualites.supprimer');
Route::get('/actualites/modifier/{id}',[App\Http\Controllers\ActualiteController::class, 'edit'])->name('actualites.modifier');
Route::put('/actualites/modifier/page/{id}',[App\Http\Controllers\ActualiteController::class, 'update'])->name('actualites.modifier-ex');
