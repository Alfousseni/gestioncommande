<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Fournisseur;

class ProduitController extends Controller
{
    public function index(){
        $produits=Produit::all();
        return view('produit.affichage',compact('produits'));
    }

    public function add(){
        $c=Categorie::all();
        $f=Fournisseur::all();
        return view('produit.affichage',compact('c','f'));

    }

    

    public function save(Request $request){
        $p=new Produit();
        $p->nom=$request->nom;
        $p->prix=$request->prix;
        $p->quantite=$request->quantite;
        $p->categorie_id=$request->categorie;
        $p->fournisseur_id=$request->fournisseur;

        $p->save();
        //return back();
        return redirect('/produit')->with('message', 'produit ajouté');

        
    }
}
