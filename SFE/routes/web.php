<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Actualite;
use App\Models\Competence;
use App\Models\Secteur;
use App\Models\Service;

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
    $secteurs= Secteur::all();
    return view('welcome',compact('actualites','secteurs'));
})->name('home1');


//View routes:
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/admin/home', function () { return view('admin.page-principale'); })->name('home-admin');
Route::get('/admin/barre', function () { return view('admin.barre'); })->name('barre-admin');
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
//Secteur Routes :
Route::get('/view-ajouter-secteur', [App\Http\Controllers\SecteurController::class, 'show_page_ajoute'])->name('view-secteur.ajouter');
Route::post('/ajouter-secteur', [App\Http\Controllers\SecteurController::class, 'ajouterSecteur'])->name('secteur.ajouter');
Route::get('/admin/secteur', [App\Http\Controllers\SecteurController::class, 'show_Secteurs'])->name('show-secteur-admin');
Route::delete('/secteurs/{id}', [App\Http\Controllers\SecteurController::class, 'destroy'])->name('secteurs.supprimer');
Route::get('/secteurs/modifier/{id}',[App\Http\Controllers\SecteurController::class, 'edit'])->name('secteurs.modifier');
Route::put('/secteurs/modifier/page/{id}',[App\Http\Controllers\SecteurController::class, 'update'])->name('secteurs.modifier-ex');
//Service Routes :
//affiche secteurs dans form ajoute service :
Route::get('/view-ajouter-service', [App\Http\Controllers\SecteurController::class, 'show_sercteurs1'])->name('view-service.ajouter');
Route::post('/ajouter-service', [App\Http\Controllers\ServiceController::class, 'ajouterService'])->name('service.ajouter');

Route::get('/showservice/{categorie}', 
  function($categorie){
    $services = Service::where('categorie', $categorie )->get();
    $secteurs = Secteur::all();
    $categories = $categorie;
    return view('services',compact('services','secteurs','categories'));
  }
)->name('view-service');

//rote qui affiche les secteurs dans services:

