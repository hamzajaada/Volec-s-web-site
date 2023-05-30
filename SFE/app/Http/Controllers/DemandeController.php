<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function ajouterdemande(Request $request)
    {
        //validation des inputs
        $validated = $request->validate([
            'categorie' => 'required|max:255',
            'objet' => 'required|max:255',
            'email' => 'required|max:255',
        ]);
       
        //création de la catégorie
        $demandes = new Demande();
        $demandes->email = $request->email ;
        $demandes->objet = $request->objet;
        $demandes->telephone = $request->telephone;
        $demandes->Message = $request->Message;
        $demandes->categorie = $request->categorie;
        $demandes->save();
    
        return redirect()->route('home1')->with('success', 'Votre service a été créée avec succès.');
    }
    public function destroy($id)
    {
        $secteur = Projet::findorFail($id);
        $secteur->delete();
        return redirect()->back()->with('success', 'Votre offre a été supprimer avec succès.');
    }
}
