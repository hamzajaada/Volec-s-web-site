<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function ajouterClient(Request $request)
    {
        //validation des inputs
        $validated = $request->validate([
            
 
        ]);
          //enregistrement de l'image
          $imageName = time().'.'.$request->image->extension();  
          $request->image->move(public_path('image/Cliente'), $imageName);
        //création de la catégorie
        $clients = new Client();
        $clients->image = $imageName;
        $clients->save();
    
        return redirect()->route('home1')->with('success', 'Votre service a été créée avec succès.');
    }
    
    public function destroy($id)
    {
        $clients = Client::findorFail($id);
        $clients->delete();
        return redirect()->back()->with('success', 'Votre offre a été supprimer avec succès.');
    }
}
