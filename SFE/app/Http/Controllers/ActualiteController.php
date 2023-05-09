<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;

class ActualiteController extends Controller
{

    public function getpage(){
        return view('admin.actualite');
    }
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
    
        return redirect()->route('actualites.index')->with('success', 'Votre actualite a été créée avec succès.');
    }
    public function index1()
    {
        $actualites = Actualite::all();
        return view('welcome', compact('actualites'));   
     }
     public function show_actualite()
     {
         $actualites = Actualite::all();
         return view('admin.actualite', compact('actualites'));
        }
        public function destroy($id)
        {
            $Act = Actualite::findorFail($id);
            $Act->delete();
            return redirect()->back()->with('success', 'Votre offre a été supprimer avec succès.');
        }
        public function edit($id)
        {
            $actualite = Actualite::findOrFail($id);
            return view('admin.modifier-actualite', compact('actualite'));
        }
        public function update(Request $request, $id)
        {
          //validation des inputs
             $validated = $request->validate([
               'description' => 'required|max:255',
               ]);

            //mise à jour de l'actualité
            $actualite = Actualite::findOrFail($id);
            $actualite->description = $request->description;

            if ($request->hasFile('image')) {
                //enregistrement de la nouvelle image
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('image/Actualite'), $imageName);
            $actualite->image = $imageName;
             }

            $actualite->save();

            return redirect()->route('show-actualite-admin')->with('success', 'Votre actualite a été modifiée avec succès.');

        }
}
