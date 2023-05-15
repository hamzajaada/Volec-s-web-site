<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Secteur;

class SecteurController extends Controller
{
    //
    function show_page_ajoute(){
        return view('admin.ajoute-secteur');
    }
    public function ajouterSecteur(Request $request)
    {
        //validation des inputs
        $validated = $request->validate([
            'categorie' => 'required|max:255',
 
        ]);
          //enregistrement de l'image
          $imageName = time().'.'.$request->image->extension();  
          $request->image->move(public_path('image/Secteur'), $imageName);
        //création de la catégorie
        $secteur = new Secteur();
        $secteur->categorie = $request->categorie;
        $secteur->image = $imageName;
        $secteur->save();
    
        return redirect()->route('home1')->with('success', 'Votre service a été créée avec succès.');
    }
    public function show_Secteurs()
    {
        $secteurs = Secteur::all();
        return view('admin.secteur', compact('secteurs'));
       }
       //show dans la forme ajouter service :
        public function show_sercteurs1()
        {
            $secteurs = Secteur::all();
            return view('admin.ajoute-service', compact('secteurs'));
        }
       

       public function destroy($id)
       {
           $secteur = Secteur::findorFail($id);
           $secteur->delete();
           return redirect()->back()->with('success', 'Votre offre a été supprimer avec succès.');
       }
       public function edit($id)
       {
           $secteurs = Secteur::findOrFail($id);
           return view('admin.modifier-secteur', compact('secteurs'));
       }
       public function update(Request $request, $id)
       {
         //validation des inputs
            $validated = $request->validate([
              'categorie' => 'required|max:255',
              ]);

           //mise à jour de l'actualité
           $secteurs = Secteur::findOrFail($id);
           $secteurs->categorie = $request->categorie;

           if ($request->hasFile('image')) {
               //enregistrement de la nouvelle image
           $imageName = time().'.'.$request->image->extension();  
           $request->image->move(public_path('image/Secteur'), $imageName);
           $secteurs->image = $imageName;
            }

           $secteurs->save();

           return redirect()->route('view-service')->with('success', 'Votre actualite a été modifiée avec succès.');

       }
       
}
