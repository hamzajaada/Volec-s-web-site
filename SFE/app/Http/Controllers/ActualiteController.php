<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;

class ActualiteController extends Controller
{
    public function ajouterActualite(Request $request)
    {
        //validation des inputs
        $validated = $request->validate([
           
            'description' => 'required|max:255',
          
        ]);
          //enregistrement de l'image
          $imageName = time().'.'.$request->image->extension();  
          $request->image->move(public_path('image/Actualite'), $imageName);
        //création de l'acctualite
        $actualite = new Actualite();
        $actualite->description = $request->description;
        $actualite->image = $imageName;
        $actualite->save();
    
        return redirect()->route('home-admin')->with('success', 'Votre actualite a été créée avec succès.');
    }
    public function index1()
    {
        $actualites = Actualite::all();
        return view('welcome', compact('actualites'));   
     }
     

}
