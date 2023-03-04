<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $p=Produit::all();
        
        return view('clientt.affichage',compact('p'));
    }

    public function save(Request $request){
        $cl=new Client();
        $cl->nom=$request->nom;
        $cl->prenom=$request->prenom;
        $cl->tel=$request->tel;
        $cl->email=$request->email;
        $cl->adresse=$request->adresse;
        $cl->save();
        


        $c=new Commande();
        $c->date = Carbon::now()->format('Y-m-d'); // format 'Y-m-d' pour une date au format yyyy-mm-dd
        $c->quantite=$request->quantite;
        $c->client_id = $cl->id;
        $c->produit_id=$request->produit_id;

        $c->save();
        //return back();
        return view('clientt.facture',compact('c'));

        
    }
}
