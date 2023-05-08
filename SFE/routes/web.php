<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
})->name('/');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', function () { return view('contact'); })->name('contact');

Route::get('/tousservice', function () { return view('all-service'); })->name('all-serv');
Route::get('/admin/home', function () { return view('admin.page-principale'); })->name('home-admin');
Route::get('/admin/barre', function () { return view('admin.barre'); })->name('barre-admin');

Route::get('/admin/ajoutserv', function () { return view('admin.ajoute-service'); })->name('ajouteserv-admin');
Route::get('/admin/ajoutcat', function () { return view('admin.ajoute-actualite'); })->name('ajouteact-admin');
Route::get('login', function () { return view('login'); })->name('login');

Auth::routes();
Route::get('/admin/ajoutcomp', function () { return view('admin.ajoute-competence'); })->name('ajoutecomp-admin');
Route::post('/ajouter-comptence', [App\Http\Controllers\CompetenceController::class, 'ajouterComptence'])->name('comptence.ajouter');
Route::get('/view-ajouter-comptence', [App\Http\Controllers\CompetenceController::class, 'vue'])->name('view-comptence.ajouter');

Route::post('/ajouter-actualite', [App\Http\Controllers\ActualiteController::class, 'ajouterActualite'])->name('Actualite.ajouter');

Route::get('/', [App\Http\Controllers\ActualiteController::class, 'index1'])->name('actualites.index');
