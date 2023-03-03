@include('layout.entete')

<br>

@if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Gestion des <b>Produits</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter un produit</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Nom</th>
						<th>Quantite</th>
						<th>Prix</th>
						<th>Catégories</th>
						<th>Fournisseur</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($produits as $produit)
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>{{ $produit->nom }}</td>
						<td>{{ $produit->quantite }}</td>
						<td>{{ $produit->prix }}</td>
						<td>{{ $produit->categorie->nom }}</td>
						<td>{{ $produit->fournisseur->nom }}</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{session('add_produit')}}" method="POST">
				@csrf
				<div class="modal-header">						
					<h4 class="modal-title">Ajout produit</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nom</label>
						<input type="text" name="nom" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Quantite</label>
						<input type="number" name="quantite" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Prix</label>
						<input type="number" name="prix" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Fournisseur</label>
						<select name="fournisseur" id="" class="form-control">
							@foreach($f as $fournisseur)
							<option value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Categories</label>
						 <select name="categorie" id="" class="form-control">
							@foreach($c as $categorie)
							<option value="{{$categorie->id}}">{{$categorie->nom}}</option>
							@endforeach
						  </select>
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
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Produit</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nom</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Quantite</label>
						<input type="number" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Prix</label>
						<input type="number" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Fournisseur</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Categories</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>

@include('layout.pied')
