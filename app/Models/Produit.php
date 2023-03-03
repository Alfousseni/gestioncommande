<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function fournisseur(){

        return $this->belongsTo(Fournisseur::class);
    }
    public function commande(){
        return $this->hasMany(Commande::class);
    }
}
