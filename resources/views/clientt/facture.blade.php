<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>passe commande</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/produit.css') }}">

</head>
<body>
	<header id="header">
        <a href="#" class="logo">AlfTech</a>
        <a href="{{route('welcome')}}" class="edit" ><input type="button" class="btn btn-default" data-dismiss="modal" value="Acceuil"></a>

    </header>
<br>

<h1 style="margin-top: 10%;color:black">Coupond de commande</h1>


 
    <div class="news" align='center' >
        <h3>
                {{$c->client->nom}}
            <em> EFFECTUER LE {{$c->created_at}} CONTACT {{$c->client->tel}}</em>
        </h3>
        <p>
            Produit :{{$c->produit->nom}} <br>
			Quantite :{{$c->quantite}} <br>
			Prix :{{$c->produit->prix}} FCFA<br>
			Montant :{{ $c->quantite * $c->produit->prix }} FCFA <br>
			 <span align='center' style="color:red; ">{{$c->etat}}
            <br />
        </p>
    </div>

@include('layout.pied')
