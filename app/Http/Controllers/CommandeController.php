<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index(){
        $commandes=Commande::all();
        return view('commande.affichage',compact('commandes'));
    }
    public function update(Request $request ,$id){
        $p =Commande::find($id);
        $p->etat="Effectuer";
        $p->update();
        return redirect()->route('list_commande');

    }
}
