<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Actualite;
use App\Models\Competence;
use App\Models\Projet;
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
    $projets = DB::table('projets')->take(5)->get();
      return view('welcome',compact('actualites','secteurs','projets'));
})->name('home1');


//View routes:
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/admin/home', function () { return view('admin.page-principale'); })->name('home-admin');
Route::get('/admin/barre', function () { return view('admin.barre'); })->name('barre-admin');
Route::get('login', function () { return view('login'); })->name('login');

Auth::routes();
//Competence Routes :
//Route::post('/ajouter-comptence', [App\Http\Controllers\CompetenceController::class, 'ajouterComptence'])->name('comptence.ajouter');
//Route::get('/view-ajouter-comptence', [App\Http\Controllers\CompetenceController::class, 'vue'])->name('view-comptence.ajouter');
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

//rote qui affiche les service dans secteurs admin:
Route::get('/admin/showservice/{categorie}', 
  function($categorie){
    $services = Service::where('categorie', $categorie )->get();
    return view('admin.service',compact('services'));
  }
)->name('view-service-admin1');
//route qui affiche les detail des services:
Route::get('/showservice/detail/{nom_service}', 
  function($nom_service){
    $services = Service::where('nom_service', $nom_service )->get();
    $secteurs = Secteur::all();
    $nom=$nom_service;
    return view('detail-services',compact('services','nom','secteurs'));
  }
)->name('view-service2');
Route::delete('/service/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('services.supprimer');
Route::get('/modifierservice/page/{id}', 
  function($id){
    $service = Service::findOrFail($id);
    $secteurs = Secteur::all();
    return view('admin.modifier-service',compact('secteurs','service'));
  }
)->name('view-service-modifer2');
Route::put('/services/modifier/page/{id}',[App\Http\Controllers\ServiceController::class, 'update'])->name('services.modifier-ex');
//projet route :
Route::get('/view-ajouter-projet', [App\Http\Controllers\ProjetController::class, 'vue'])->name('view-projet.ajouter');
Route::post('/ajouter-projet', [App\Http\Controllers\ProjetController::class, 'ajouterprojet'])->name('projet.ajouter');
Route::get('/projet',function(){
  $projects= Projet::all();
  $secteurs = Secteur::all();
       return view('projet',compact('secteurs','projects'));
})->name('view-projet');
Route::get('/projet-table/{nom_entreprise}',function($nom_entreprise){
  $projects= Projet::where('nom_entreprise', $nom_entreprise )->get();;
  $secteurs = Secteur::all();
  $nom=$nom_entreprise;
  return view('table-projet',compact('secteurs','projects','nom'));
})->name('view-projet-table');
Route::get('/projet/admin',function(){
  $projects= Projet::all();
  return view('admin.projet',compact('projects'));
})->name('view-projet-admin');
Route::delete('/projets/{id}', [App\Http\Controllers\ProjetController::class, 'destroy'])->name('projets.supprimer');
Route::get('/modifierservice/page/{id}', 
  function($id){
    $projects = Projet::findOrFail($id);
    return view('admin.modifier-projet',compact('projects'));
  }
)->name('view-projet2');
Route::put('/projets/modifier/page/{id}',[App\Http\Controllers\ProjetController::class, 'update'])->name('projets.modifier-ex');