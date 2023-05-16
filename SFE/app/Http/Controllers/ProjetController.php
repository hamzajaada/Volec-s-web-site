<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    //
    public function vue(){
        return view('admin.ajoute-projet');
    }
    public function ajouterprojet(Request $request)
    {
        //validation des inputs
        $validated = $request->validate([
            'nom_projet' => 'required|max:255',
            'nom_entreprise' => 'required|max:255',
            'localisation_entreprise' => 'required|max:255',
        ]);
          //enregistrement de l'image
          $imageName = time().'.'.$request->image->extension();  
          $request->image->move(public_path('image/Projet'), $imageName);
        //création de la catégorie
        $projets = new Projet();
        $projets->nom_projet = $request->nom_projet;
        $projets->nom_entreprise = $request->nom_entreprise;
        $projets->description = $request->description;
        $projets->prix_projet = $request->prix_projet;
        $projets->localisation_entreprise = $request->localisation_entreprise;
        $projets->image = $imageName;
        $projets->save();
    
        return redirect()->route('home1')->with('success', 'Votre service a été créée avec succès.');
    }
    public function destroy($id)
    {
        $secteur = Projet::findorFail($id);
        $secteur->delete();
        return redirect()->back()->with('success', 'Votre offre a été supprimer avec succès.');
    }
    public function update(Request $request, $id)
    {
     
        //validation des inputs
         $validated = $request->validate([
            'nom_projet' => 'required|max:255',
            'nom_entreprise' => 'required|max:255',
            'localisation_entreprise' => 'required|max:255',
           ]);
        //mise à jour de l'actualité
        $projets = Projet::findOrFail($id);
        $projets->nom_projet = $request->nom_projet;
        $projets->nom_entreprise = $request->nom_entreprise;
        $projets->description = $request->description;
        $projets->prix_projet = $request->prix_projet;
        $projets->localisation_entreprise = $request->localisation_entreprise;

        if ($request->hasFile('image')) {
        //enregistrement de la nouvelle image
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('image/Projet'), $imageName);
        $projets->image = $imageName;
         }
        $projets->save();

        return redirect()->route('view-projet-admin')->with('success', 'Votre actualite a été modifiée avec succès.');

    }
}
