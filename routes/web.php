<?php
namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produit',[ProduitController::class,'index'])->name('list_produit');
Route::post('/produit',[ProduitController::class,'save'])->name('add_produit');
Route::get('/client',[ClientController::class,'index'])->name('list_client');
Route::get('/produit',[ProduitController::class,'add'])->name('form_produit');
Route::get('/fournisseur',[FournisseurController::class,'index'])->name('list_fournisseur');
Route::get('/commande',[CommandeController::class,'index'])->name('list_commande');
Route::get('/categorie',[CategorieController::class,'index'])->name('list_commande');
