<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function ajouterService(Request $request)
    {
        //validation des inputs
        $validated = $request->validate([
            'categorie' => 'required|max:255',
            'description' => 'required|max:255',
            'nom_service' => 'required|max:255',
            
        ]);
          //enregistrement de l'image
          $imageName = time().'.'.$request->image->extension();  
          $request->image->move(public_path('image/Servic'), $imageName);
        //création de la catégorie
        $services = new Service();
        $services->categorie = $request->categorie;
        $services->nom_service = $request->nom_service;
        $services->description = $request->description;
        $services->image = $imageName;
        $services->save();
    
        return redirect()->route('home1')->with('success', 'Votre service a été créée avec succès.');
    }
 

}
