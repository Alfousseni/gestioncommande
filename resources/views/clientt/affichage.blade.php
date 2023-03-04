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
        <ul>
            <h1 style="margin-right:400px;"> Commande</h1>
        </ul>
    </header>
	


<div  class="ed">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{route('add_client')}}" method="POST">
				@csrf
				<div class="modal-header">						
					<h4 class="modal-title" style="margin-left:60px;">commande ton produit</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nom</label>
						<input type="text" name="nom" class="form-control" required>
					</div>
					<div class="form-group">
						<label>prenom</label>
						<input type="text" name="prenom" class="form-control" required>
					</div>
					<div class="form-group">
						<label>tel</label>
						<input type="text" name="tel" class="form-control" required>
					</div>
					<div class="form-group">
						<label>email</label>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Adresse</label>
						<input type="text" name="adresse" class="form-control" required>
					</div>
					<div>
						<label>Choisir un produit</label>
						<select name="produit_id" id="" class="form-control">
							@foreach($p as $produit)
							<option value="{{$produit->id}}">{{$produit->nom}}</option>
							@endforeach
					  	</select>
					</div>
					<div class="form-group">
						<label>Quantite</label>
						<input type="number" name="quantite" class="form-control" required>
					</div>				
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
@include('layout.pied')
