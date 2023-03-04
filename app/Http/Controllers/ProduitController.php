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
        $c=Categorie::all();
        $f=Fournisseur::all();
        return view('produit.affichage',compact('produits','c','f'));
    }

    // public function add(){
    //     $c=Categorie::all();
    //     $f=Fournisseur::all();
    //     return view('produit.affichage',compact('c','f'));

    // }

    public function edit($id){
        $p =Produit::find($id);
        
        return view('produit.edit',compact('p'));
    }

    public function update(Request $request ,$id){
        $p =Produit::find($id);
        $p->nom=$request->nom;
        $p->prix=$request->prix;
        $p->quantite=$request->quantite;
        $p->update();
        return redirect()->route('list_produit')->with('message', 'produit modifier');

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
        return redirect()->route('list_produit')->with('message', 'produit ajouter');

        
    }

    public function delete_produit($id){
        $p=Produit::find($id);
        $p->delete();
        return redirect()->route('list_produit')->with('message', 'produit supprimer');

    }
}
