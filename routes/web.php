<?php
namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/produit', [ProduitController::class, 'index'])->name('list_produit');
Route::post('/add_produit',[ProduitController::class,'save'])->name('add_produit');
Route::get('/edite_produit/{id}',[ProduitController::class,'edit'])->name('edite_produit');
Route::get('/delete_produit/{id}',[ProduitController::class,'delete_produit'])->name('delete_produit');
Route::post('/update_produit/{id}',[ProduitController::class,'update'])->name('update_produit');



Route::get('/fournisseure',[FournisseurController::class,'index'])->name('list_fournisseure');
Route::post('/add_fournisseure',[FournisseurController::class,'save'])->name('add_fournisseure');
Route::get('/delete_fournisseure/{id}',[FournisseurController::class,'delete_fournisseure'])->name('delete_fournisseure');
Route::get('/edite_fournisseure/{id}',[FournisseurController::class,'edit'])->name('edite_fournisseure');
Route::post('/update_fournisseure/{id}',[FournisseurController::class,'update'])->name('update_fournisseure');


// Route::get('/fournisseure',[ClientController::class,'index'])->name('client');
Route::post('/add_client',[ClientController::class,'save'])->name('add_client');
Route::get('/client',[ClientController::class,'index'])->name('list_client');

Route::get('/commande',[CommandeController::class,'index'])->name('list_commande');
Route::get('/edit_commande/{id}',[CommandeController::class,'update'])->name('edit_commande');





