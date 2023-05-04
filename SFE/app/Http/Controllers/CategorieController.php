<?php

namespace App\Http\Controllers;
use App\Models\Categorie;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function ajouterCategorie(Request $request)
{
    //validation des inputs
    $validated = $request->validate([
        'nom_categorie' => 'required|max:255',
        'description' => 'required|max:255',
      
    ]);
      //enregistrement de l'image
      $imageName = time().'.'.$request->image->extension();  
      $request->image->move(public_path('image/categories'), $imageName);
    //création de la catégorie
    $categorie = new Categorie();
    $categorie->nom_categorie = $request->nom_categorie;
    $categorie->description = $request->description;
    $categorie->image = $imageName;
    $categorie->save();

    return redirect()->route('home-admin')->with('success', 'Votre service a été créée avec succès.');
}

}
