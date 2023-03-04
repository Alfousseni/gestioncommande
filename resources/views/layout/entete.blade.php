<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/produit.css') }}">

</head>
<body>
	<header id="header">
        <a href="#" class="logo">AlfTech</a>
        <ul>
            <li><a href="{{route('list_produit')}}" class="active">Home</a></li>
            <li><a href="{{route('list_commande')}}">Commande</a></li>
            <li><a href="{{route('list_fournisseure')}}">Fournisseur</a></li>
            <a href="{{route('welcome')}}" class="edit" ><input type="button" class="btn btn-default" data-dismiss="modal" value="Acceuil"></a>

        </ul>
    </header>
	