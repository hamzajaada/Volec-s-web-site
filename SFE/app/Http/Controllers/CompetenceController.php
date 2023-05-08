<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competence;

class CompetenceController extends Controller
{
    //
    public function ajouterComptence(Request $request)
    {
        //validation des inputs
        $validated = $request->validate([
            'nom_competence' => 'required|max:255',
            'description' => 'required|max:255',
          
        ]);
          //enregistrement de l'image
          $imageName = time().'.'.$request->image->extension();  
          $request->image->move(public_path('image/comptence'), $imageName);
        //création de la catégorie
        $comptence = new Competence();
        $comptence->nom_competence = $request->nom_competence;
        $comptence->description = $request->description;
        $comptence->image = $imageName;
        $comptence->save();
    
        return redirect()->route('home-admin')->with('success', 'Votre service a été créée avec succès.');
    }
    public function vue(){
        return view('admin.ajoute-competence');
    }

    public function show_competence()
    {
        $comptences = Competence::all();
        return view('welcome', compact('comptences'));   
     }
}
