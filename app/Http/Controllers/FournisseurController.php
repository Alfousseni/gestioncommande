<?php

namespace App\Http\Controllers;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function index(){
        $fournisseures=Fournisseur::all();
        return view('fournisseur.affichage',compact('fournisseures'));
    }
    public function edit($id){
        $p =Fournisseur::find($id);
        
        return view('fournisseur.edit',compact('p'));
    }

    public function save(Request $request){
        $f=new Fournisseur();
        $f->nom=$request->nom;
        $f->prenom=$request->prenom;
        $f->tel=$request->tel;
        $f->email=$request->email;
        $f->adresse=$request->adresse;

        $f->save();
        //return back();
        return redirect()->route('list_fournisseure')->with('message', 'fournisseure ajouter');
        
    }
    public function delete_fournisseure($id){
        $f=Fournisseur::find($id);
        $f->delete();
        return redirect()->route('list_fournisseure')->with('message', 'fournisseure supprimer');

    }
    public function update(Request $request ,$id){
        $p =Fournisseur::find($id);
        $p->nom=$request->nom;
        $p->prenom=$request->prenom;
        $p->tel=$request->tel;
        $p->email=$request->email;
        $p->adresse=$request->adresse;
        $p->update();
        return redirect()->route('list_fournisseure')->with('message', 'fournisseure modifier');

    }
}
